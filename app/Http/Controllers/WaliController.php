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


        // $pendaftar = DB::table('pendaftar_beasiswa')
        //     ->join('form_beasiswa','pendaftar_beasiswa.nim','=','form_beasiswa.nim')
        //     ->select('form_beasiswa.ipk','pendaftar_beasiswa.nim','form_beasiswa.nama')
        //     ->where([['id_beasiswa','=',$id_beasiswa],['pendaftar_beasiswa.nim','>=',$nim_awal],['pendaftar_beasiswa.nim','<=',$nim_akhir]])
        //     ->get();

        //     $nama_beasiswa = DB::table('beasiswa')->select('nama_beasiswa')->where('id_beasiswa','=',$id_beasiswa)->value('nama_beasiswa');

             

        //      foreach ($pendaftar as $p) {

        //         $penghasilan_ayah = DB::table('orangtua_mhs')->select('penghasilan_ayah')->where('nim','=',$p->nim)->value('penghasilan_ayah');
        //         $penghasilan_ibu = DB::table('orangtua_mhs')->select('penghasilan_ibu')->where('nim','=',$p->nim)->value('penghasilan_ibu');

        //         $total_penghasilan = $penghasilan_ayah + $penghasilan_ibu;

        //         if($total_penghasilan > 5000000){
        //             $skor_penghasilan = 0;
        //         }
        //         if($total_penghasilan > 3500001 and $total_penghasilan <= 5000000){
        //             $skor_penghasilan = 1;
        //         }
        //         if($total_penghasilan > 2500001 and $total_penghasilan <= 3500000){
        //             $skor_penghasilan = 2;
        //         }
        //         if($total_penghasilan > 1500001 and $total_penghasilan <= 2500000){
        //             $skor_penghasilan = 3;
        //         }
        //         if($total_penghasilan <= 150000){
        //             $skor_penghasilan = 4;
        //         }


        //         if($p->ipk > 3.75 and $p->ipk < 4){
        //             $skor_ipk = 4;
        //         }
        //         if($p->ipk > 3.51 and $p->ipk < 3.75){
        //             $skor_ipk = 3;
        //         }
        //         if($p->ipk > 3.26 and $p->ipk < 3.50){
        //             $skor_ipk = 2;
        //         }
        //         if($p->ipk > 3.00 and $p->ipk < 3.26){
        //             $skor_ipk = 1;
        //         }

        //         $skor_akhir = ($skor_ipk * 50/100) + ($skor_penghasilan * 10/100);

        //         DB::table('ranking_beasiswa')->insert([
        //                 'id_beasiswa' => $request->id_beasiswa,
        //                 'nama_beasiswa'=> $nama_beasiswa,
        //                 'nim' => $p->nim,
        //                 'nama_mahasiswa' => $p->nama,
        //                 'ipk' => $p->ipk,
        //                 'skor_ipk' => $skor_ipk,
        //                 'skor_prestasi' => 0,
        //                 'skor_perilaku' => 0,
        //                 'skor_organisasi' => 0,
        //                 'skor_kemampuan_ekonomi' => $skor_penghasilan,
        //                 'skor_akhir' => $skor_akhir,
        //             ]);
        //         }
                 $rankingpendaftar = DB::table('ranking_beasiswa')->where([['id_beasiswa','=',$id_beasiswa],['nim','>=',$nim_awal],['nim','<=',$nim_akhir]])
                        ->get();
                    return view('ranking_per_beasiswa',['rankingpendaftar' => $rankingpendaftar]);
        }


       

    
}
