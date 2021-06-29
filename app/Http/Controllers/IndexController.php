<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;
use App\Models\Chapter;

class IndexController extends Controller
{
    public function home(){
    	$danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
    	$truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->get();
    	return view('pages.home')->with(compact('danhmuc','truyen'));
    }
    public function danhmuc($slug){
    	$danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
    	$danhmuc_id = DanhmucTruyen::where('slug_danhmuc',$slug)->first();
    	$tendanhmuc = $danhmuc_id->tendanhmuc;
    	$truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->where('danhmuc_id',$danhmuc_id->id)->get();
    	return view('pages.danhmuc')->with(compact('danhmuc','truyen','tendanhmuc'));
    }
     public function xemtruyen($slug){
     	$danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
     	$truyen = Truyen::with('danhmuctruyen')->where('slug_truyen',$slug)->where('kichhoat',0)->first();
     	
     	$chapter = Chapter::with('truyen')->orderBy('id','ASC')->where('truyen_id',$truyen->id)->get();
     	$cungdanhmuc = Truyen::with('danhmuctruyen')->where('danhmuc_id',$truyen->danhmuctruyen->id)->whereNotIn('id',[$truyen->id])->get();
    	return view('pages.truyen')->with(compact('danhmuc','truyen','chapter','cungdanhmuc'));
    }
}
