<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class mahasiswa extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return view('login_mhs');
        }else{
        $nim = Session::get('username');
        $profil = DB::table('form_beasiswa')->where('nim','=',$nim)->first();

        if($profil){
            $mahasiswa = DB::table('mahasiswa')->where('nim','=',$nim)->get();
            $form_beasiswa = DB::table('form_beasiswa')->where('nim','=',$nim)->get();
            $orangtua_mhs = DB::table('orangtua_mhs')->where('nim','=',$nim)->get();
            return view('profil_mhs',['mahasiswa' => $mahasiswa, 'form_beasiswa' => $form_beasiswa,'orangtua_mhs' => $orangtua_mhs]);
        }else{
            $status_form = 0;
            $mahasiswa = DB::table('mahasiswa')->where('nim','=',$nim)->update(['status_form' => $status_form]);


            $mahasiswa = DB::table('mahasiswa')->where('nim','=',$nim)->get();
            $form_beasiswa = DB::table('form_beasiswa')->where('nim','=',$nim)->get();
            $orangtua_mhs = DB::table('orangtua_mhs')->where('nim','=',$nim)->get();
            return view('profil_mhs',['mahasiswa' => $mahasiswa, 'form_beasiswa' => $form_beasiswa,'orangtua_mhs' => $orangtua_mhs]);
        }
    	
        }
    }

    public function pilih_form(){
        return view('pilih_form');
    }

    public function form_data_diri(){
        return view('form_data_diri');
    }
     public function form_data_keluarga(){
        return view('form_data_keluarga');
    }

    public function simpan_data_diri(Request $request){
        DB::table('form_beasiswa')->insert([
            'nim' =>$request->nim,
            'nama' =>$request->nama,
            'jurusan' =>$request->jurusan,
            'prodi' =>$request->prodi,
            'tempat_lahir' =>$request->tempat_lahir,
            'tanggal_lahir' =>$request->tanggal_lahir,
            'gender' =>$request->gender,
            'semester' =>$request->semester,
            'ipk' =>$request->ipk,
            'nama_bank' =>$request->nama_bank,
            'no_rek' =>$request->no_rek,
            'alamat' =>$request->alamat,
            'Kota' =>$request->Kota,
            'kodepos' =>$request->kodepos,
            'nohp' =>$request->nohp,
            'email' =>$request->email
            ]);
        $nim = $request->nim;
        $status_form = 1;
        $mahasiswa = DB::table('mahasiswa')->where('nim','=',$nim)->update(['status_form' => $status_form]);

        redirect('profil_mhs');
    }

    public function simpan_data_keluarga(Request $request){
        DB::table('orangtua_mhs')->insert([
            'nim'=>$request->nim,
            'nama_ayah'=>$request->nama_ayah,
            'tempat_lahir_ayah'=>$request->tempat_lahir_ayah,
            'tanggal_lahir_ayah'=>$request->tanggal_lahir_ayah,
            'alamat_ayah'=>$request->alamat_ayah,
            'nohp_ayah'=>$request->nohp_ayah,
            'pekerjaan_ayah'=>$request->pekerjaan_ayah,
            'penghasilan_ayah'=>$request->penghasilan_ayah,
            'pekerjaan_sambilan_ayah'=>$request->pekerjaan_sambilan_ayah,
            'penghasilan_sambilan_ayah'=>$request->penghasilan_sambilan_ayah,
            'nama_ibu'=>$request->nama_ibu,
            'tempat_lahir_ibu'=>$request->tempat_lahir_ibu,
            'tanggal_lahir_ibu'=>$request->tanggal_lahir_ibu,
            'alamat_ibu'=>$request->alamat_ibu,
            'nohp_ibu'=>$request->nohp_ibu,
            'pekerjaan_ibu'=>$request->pekerjaan_ibu,
            'penghasilan_ibu'=>$request->penghasilan_ibu,
            'pekerjaan_sambilan_ibu'=>$request->pekerjaan_sambilan_ibu,
            'penghasilan_sambilan_ibu'=>$request->penghasilan_sambilan_ibu
            ]);
            $nim = $request->nim;
            $status_form_keluarga = 1;
            $mahasiswa = DB::table('mahasiswa')->where('nim','=',$nim)->update(['status_form_keluarga' => $status_form_keluarga]);

            redirect('profil_mhs');
    }

    public function home(){
    	return view('homepage');
    }

    public function list_beasiswa(){
    	$mahasiswa = DB::table('mahasiswa')->get();
    	$beasiswa = DB::table('beasiswa')->get();
    	return view('list_beasiswa',['mahasiswa' => $mahasiswa, 'beasiswa' => $beasiswa]);
    }

    public function login(){
    	return view('login_mhs');
    }

    public function select_mahasiswa_by_nim(Request $request){

    }

}
