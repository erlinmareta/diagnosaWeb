<?php

namespace App\Http\Controllers;

use App\Models\DetailPasien;
use App\Models\Hasil;
use App\Models\Paket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HasilController extends Controller
{
    public function index()
    {
        $data['dtHasil'] = DB::table('medicalcheckup')->join('detail_pasien', 'detail_pasien.id', '=', 'medicalcheckup.iddetail')->join('users','detail_pasien.idpasien','=','users.id')->join('pakets', 'pakets.id', '=', 'detail_pasien.idpaket')->get();
        return view('admin.hasil', $data);
    }
    public function create()
    {

        $data['pasien'] = DetailPasien::join('users','users.id','=','detail_pasien.idpasien')->select('detail_pasien.id','users.id as idpasien', 'users.name')->get();
        $data['paket'] = Paket::all();
        return view('admin.tambahhasil', $data);
    }
    public function kirim($id)
    {
        Hasil::where('id_mcu', $id)->update([
            'kirim' => '1'
        ]);
        return redirect()->route('admin.mcu')->with('toast_success', 'Data berhasil dikirim!');
    }
    public function store(Request $request)
    {
        $pasien = Hasil::join('detail_pasien','detail_pasien.id','=','medicalcheckup.iddetail')->where('iddetail', $request->pasien)->count();
        if ($pasien > 0) {
            Hasil::where("iddetail", $request->pasien)->update([
                "hasil" => $request->hasil,
                "kirim" => 0
            ]);
        } else {
            Hasil::create([
                'iddetail' => $request->pasien,
                'hasil' => $request->hasil,
                'kirim' => 0
            ]);
        }
        return redirect('admin.mcu');
    }
}
