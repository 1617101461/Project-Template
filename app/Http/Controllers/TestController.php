<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nur;

class TestController extends Controller
{
 public function costum1()
{
	return view('costum1');
}

 public function paragraf()
{
	return view('paragraf');
}


 public function costum2()
{
	return view('costum2');
}

public function galeri()
{
	return view('galeri');
}


 public function database()
{
	return view('database');
}

public function table()
{
	$a = nur::all();
	return view('table', compact('a'));
}
}
