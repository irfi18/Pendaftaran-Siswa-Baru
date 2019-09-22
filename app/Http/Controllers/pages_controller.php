<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages_controller extends Controller
{
	public function index(){
		$title = 'Welcome To Website STM';
		return view('pages.index')->with('title', $title);
	}
	public function about(){
		$title = 'Sejarah Singkat';
		return view('pages.about')->with('title',$title);
	}
	public function kontak(){
		$title = 'Kontak SMKN 3 MATARAM';
		return view('pages.kontak')->with('title', $title);
	}
	
}
