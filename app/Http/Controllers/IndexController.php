<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;
class IndexController extends Controller
{
    public function home(){
    	$danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
    	$truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->get();
    	return view('pages.home')->with(compact('danhmuc','truyen'));
    }
    public function danhmuc($slug){
    	$danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
    	return view('pages.truyen')->with(compact('danhmuc'));
    }
     public function xemtruyen($slug){
     	$danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
    	return view('pages.chapter')->with(compact('danhmuc'));
    }
}
