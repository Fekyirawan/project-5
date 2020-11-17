<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{

	function showlogin(){
		return view('template.login');
	}

	function loginprocess(){

		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('beranda')->with('success', 'login berhasil');
		}else {
			return back()->with('danger', 'login gagal, silahkan cek email dan password anda'); 
		}
	}

	function logout(){
		Auth::logout();
		return redirect('beranda');

	}


	function registrasi(){
		return view('template.registrasi');

	}
}

	