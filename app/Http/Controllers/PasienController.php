<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Pasien;
use Illuminate\Support\Facades\Auth;

class PasienController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if(Auth::id()&&Auth::user()->usertype=='1')
            {
                return $next($request);
            }else{
                return redirect('/login');
            }
        });
    }
    public function index()
    {
        $dtuser = User::all();
        return view('admin.pasien', compact('dtuser'));
    }
}

