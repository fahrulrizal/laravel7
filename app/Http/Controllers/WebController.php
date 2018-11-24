<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Berita;

class WebController extends Controller
{
   public function index()
   {
   	
   	$berita = Berita::all();
   	return view('web.child.home')->with('berita', $berita);
   
   }

   public function show($id)
   {

   	$berita = Berita::find($id);
   	return view('web.child.showberita', ['berita' => $berita]);
   
   }

}
