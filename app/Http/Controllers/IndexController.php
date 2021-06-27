<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
    	return view('pages.home');
    }
    public function doctruyen(){
    	return view('pages.truyen');
    }
}
