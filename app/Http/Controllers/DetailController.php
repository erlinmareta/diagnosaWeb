<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DetailPasien;

class DetailController extends Controller
{
    public function index($id)
    {
        $dtdetail = DetailPasien::join('users','users.id','=','detail_pasien.idpasien')->join('pakets','pakets.id','=','detail_pasien.idpaket')->where('users.id',$id)->get();
        return view('admin.detailPasien', compact('dtdetail'));
    }

}
