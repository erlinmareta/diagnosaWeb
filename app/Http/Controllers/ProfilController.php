<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use Illuminate\Http\Request;

use App\Models\User;
use Barryvdh\DomPDF\PDF as PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::id()) {
                return $next($request);
            } else {
                return redirect('/login');
            }
        });
    }
    public function index()
    {
        $data['dtuser'] = Auth::user();
        return view('user.profil', $data);
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if ($request->password == null) {
            $user->update([
                'name'=>$request->username,
                'hp' => $request->hp,
                'alamat' => $request->alamat,
                'email' => $request->email,
            ]);
        }else {
            $user->update([
                'name'=>$request->username,
                'hp' => $request->hp,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'password'=>Hash::make($request->password)
            ]);

        }
        return redirect('/home');
    }

    public function cetak($id)
    {
        $user = Hasil::join('detail_pasien', 'detail_pasien.id', '=', 'medicalcheckup.iddetail')->join('users','users.id','=','detail_pasien.idpasien')->join('pakets','pakets.id','=','detail_pasien.idpaket')->where('users.id','=',$id)->select('*','medicalcheckup.created_at as mcreate', 'medicalcheckup.updated_at as mupdate')->get();
        if (!isset($user[0]['kirim'])&&Auth::user()->usertype==0) {
            return Redirect::back()->withErrors(['Data belum ada hubungi admin!']);
        }
        if($user[0]['kirim']==0&&Auth::user()->usertype==0){
            return Redirect::back()->withErrors(['Data belum dikirim hubungi admin!']);
        }
        $pdf = app('dompdf.wrapper');
        $pdf->setPaper("A4", "portrait");
        $pdf->loadview('user.hasil', ['user' => $user]);
        $pdf->render();
        return $pdf->stream('laporan.pdf');
    }
}
