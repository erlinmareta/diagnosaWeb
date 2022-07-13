<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Pasien;

class PasienController extends Controller
{
    public function index()
    {
        $dtuser = User::all();
        return view('admin.pasien', compact('dtuser'));
    }
}

