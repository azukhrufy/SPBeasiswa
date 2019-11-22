<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class mahasiswa extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return view('form_login');
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

    public function daftar_beasiswa(Request $request){
        if(!Session::get('login')){
            return view('form_login');
        }else{
            $nim = Session::get('username');
            $id_beasiswa = $request->id_beasiswa;
            $profil = DB::table('form_beasiswa')->where('nim','=',$nim)->first();

            // cek apakah mahasiswa tsb sudah mengisi form data diri
            if($profil){
                 $orangtua_mhs = DB::table('orangtua_mhs')->where('nim','=',$nim)->first();

                 //cek apakah mahasiswa tsb sudah mengisi form orangtua
                if($orangtua_mhs){
                    $mendaftar = DB::table('pendaftar_beasiswa')->where([['nim','=',$nim],['id_beasiswa','=',$id_beasiswa]])->first();
                    //Cek apakah mahasiswa tersebut sudah pernah mendaftar beasiswa yang sama
                    if(!$mendaftar){
                          //ambil jumlah pendaftar terakhir
                        $pendaftar = DB::table('beasiswa')->select('Pendaftar')->where('id_beasiswa','=',$id_beasiswa)->value('Pendaftar');
                        $Pendaftar = $pendaftar + 1;

                        //Update jumlah pendaftar terakhir
                        $pendaftar = DB::table('beasiswa')->where('id_beasiswa','=',$id_beasiswa)->update(['Pendaftar' => $Pendaftar]);

                        //tambahkan data pendaftar ke tabel pendaftar beasiswa
                        DB::table('pendaftar_beasiswa')->insert([
                            'nim' => $nim,
                            'id_beasiswa' => $id_beasiswa
                            ]);

                        $nama_beasiswa = DB::table('beasiswa')->select('nama_beasiswa')->where('id_beasiswa','=',$id_beasiswa)->value('nama_beasiswa');
                        $nama_mahasiswa = DB::table('form_beasiswa')->select('nama')->where('nim','=',$nim)->value('nama');
                        $ipk = DB::table('form_beasiswa')->select('ipk')->where('nim','=',$nim)->value('ipk');
                         
                        $penghasilan_ayah = DB::table('orangtua_mhs')->select('penghasilan_ayah')->where('nim','=',$nim)->value('penghasilan_ayah');

                        $penghasilan_ibu = DB::table('orangtua_mhs')->select('penghasilan_ibu')->where('nim','=',$nim)->value('penghasilan_ibu');

                         $total_penghasilan = $penghasilan_ayah + $penghasilan_ibu;

                        if($total_penghasilan > 5000000){
                            $skor_penghasilan = 0;
                        }
                        if($total_penghasilan > 3500001 and $total_penghasilan <= 5000000){
                            $skor_penghasilan = 1;
                        }
                        if($total_penghasilan > 2500001 and $total_penghasilan <= 3500000){
                            $skor_penghasilan = 2;
                        }
                        if($total_penghasilan > 1500001 and $total_penghasilan <= 2500000){
                            $skor_penghasilan = 3;
                        }
                        if($total_penghasilan <= 150000){
                            $skor_penghasilan = 4;
                        }

                        if($ipk > 3.75 and $ipk < 4){
                            $skor_ipk = 4;
                        }
                        if($ipk > 3.51 and $ipk < 3.75){
                            $skor_ipk = 3;
                        }
                        if($ipk > 3.26 and $ipk < 3.50){
                            $skor_ipk = 2;
                        }
                        if($ipk > 3.00 and $ipk < 3.26){
                            $skor_ipk = 1;
                        }

                        $skor_akhir = ($skor_ipk * 50/100) + ($skor_penghasilan * 10/100);

                        DB::table('ranking_beasiswa')->insert([
                        'id_beasiswa' => $id_beasiswa,
                        'nama_beasiswa'=> $nama_beasiswa,
                        'nim' => $nim,
                        'nama_mahasiswa' => $nama_mahasiswa,
                        'ipk' => $ipk,
                        'skor_ipk' => $skor_ipk,
                        'skor_prestasi' => 0,
                        'skor_perilaku' => 0,
                        'skor_organisasi' => 0,
                        'skor_kemampuan_ekonomi' => $skor_penghasilan,
                        'skor_akhir' => $skor_akhir,
                        ]);
                        
                        return view('homepage');
                    }else{
                       echo "Telah mendaftar";
                    }
                }else{
                    return view('form_data_keluarga');
                }
            }else{
                return view('form_data_diri');
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

            return view('profil_mhs');
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
    	return view('form_login');
    }

    public function select_mahasiswa_by_nim(Request $request){

    }

}
