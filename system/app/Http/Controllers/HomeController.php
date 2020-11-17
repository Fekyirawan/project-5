<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

	function showberanda(){
		return view('template.beranda');
	}

	function showproduk(){
		return view('template.produk');
	}

}