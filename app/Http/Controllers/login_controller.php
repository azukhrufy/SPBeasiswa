<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class login_controller extends Controller
{
    public function login(Request $request){

    	echo "hello";
		$username = $request->username;
		$password = $request->password;

		$mhs= DB::table('mhsuser')->where('username','=',$username)->first();
		if ($mhs){
			$pass = $mhs->password;
				if($pass == $password){
					echo "Login Berhasil";
					$mahasiswa = "mahasiswa";
					$request->session()->put('username',$username);
					$request->session()->put('status',$mahasiswa);
					// $request->session()->put('deposit',$member->deposit);
					Session::put('login',TRUE);
					// Session::put('login-mhs',TRUE);
					return redirect('home');
				}else{
					echo "password salah";
				}
				
		}
		else{
			// return view('login_mhs');
			$wali_dosen= DB::table('wali_dosen')->where('username','=',$username)->first();
			if($wali_dosen){
				$pass = $wali_dosen->password;
				if($pass == $password){
					$wali = "wali";
					$request->session()->put('username',$username);
					$request->session()->put('status',$wali);
					Session::put('login',TRUE);
					// Session::put('login-wali',TRUE);
					return redirect('home');
				}else{
					echo "password salah";
				}
			}else{
				return view('auth');
			}
	 	}
	}

	public function auth(){
		return view('form_login');
	}

	public function logout(Request $request) {
		$username = $request->username;
		$mhs= DB::table('mhsuser')->where('username','=',$username)->first();
		$request->session()->forget('username',$username);
			// $request->session()->forget('nama',$member->nama);
			// $request->session()->forget('deposit',$member->deposit);
			Session::put('login',FALSE);
		echo "Data telah dihapus dari session.";
		return redirect('home');
	}
}
