<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class walicontroller extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return view('login_mhs');
        }else{
        $username = Session::get('username');
        $kelas = DB::table('wali_dosen')->where('username','=',$username)->first();

        if($kelas){
            $mahasiswa = DB::table('wali_dosen')->where('username','=',$username)->get();
            // $form_beasiswa = DB::table('form_beasiswa')->where('nim','=',$nim)->get();
            // $orangtua_mhs = DB::table('orangtua_mhs')->where('nim','=',$nim)->get();
            return view('dashboard_wali',['mahasiswa' => $mahasiswa]);
        }else{
        }
    	
        }
    }
}
