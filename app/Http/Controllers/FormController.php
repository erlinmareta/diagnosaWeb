<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DetailPasien;
use App\Models\Paket;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
  public function index()
  {
    $dtdetail = DetailPasien::all();
    $data['auth'] = Auth::user();
    $data['paket'] = Paket::all();
    return view('user.form',$data);
  }

  public function store(Request $request)
    {
        DetailPasien::create([
            'idpasien' => $request->idpasien,
            'idpaket' => $request->idpaket,
            'bb' => $request->bb,
            'tb' => $request->tb,
            'keluhan' => $request->keluhan,
            'file' => $request->file,
        ]);
        return redirect('user.validasi')->with('toast_success', 'Data berhasil ditambahkan!');
    }

    public function validasi()
    {
      return view('user.validasi');
    }
}
