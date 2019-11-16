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
            return view('dashboard_wali',['mahasiswa' => $mahasiswa]);
        }else{
        }
    	
        }
    }

    public function ranking_by_beasiswa(){
        $mahasiswa = DB::table('mahasiswa')->get();
        $beasiswa = DB::table('beasiswa')->get();
        return view('ranking_by_beasiswa',['mahasiswa' => $mahasiswa, 'beasiswa' => $beasiswa]);
    }


    public function ranking_per_beasiswa(Request $request){
        $id_beasiswa = $request->id_beasiswa;
        $username = Session::get('username');

         // $pendaftar = DB::table('beasiswa')->select('Pendaftar')->where('id_beasiswa','=',$id_beasiswa)->value('Pendaftar');

        $nim_awal = DB::table('wali_dosen')->select('nim_awal')->where('username','=',$username)->value('nim_awal');
        $nim_akhir = DB::table('wali_dosen')->select('nim_akhir')->where('username','=',$username)->value('nim_akhir');


        $pendaftar = DB::table('pendaftar_beasiswa')
            ->join('form_beasiswa','pendaftar_beasiswa.nim','=','form_beasiswa.nim')
            ->select('form_beasiswa.ipk','pendaftar_beasiswa.nim','form_beasiswa.nama')
            ->where([['id_beasiswa','=',$id_beasiswa],['pendaftar_beasiswa.nim','>=',$nim_awal],['pendaftar_beasiswa.nim','<=',$nim_akhir]])
            ->orderBy('form_beasiswa.ipk','desc')
            ->get();
             return view('ranking_per_beasiswa',['pendaftar' => $pendaftar]);


        // $pendaftar = DB:table('wali_dosen')->where('username' = $username and 'nim' > $kelas->nim_awal and 'nim')

    }
}
