<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    Public function home(){
        return view('home');
    }
    Public function product(){
        return view('product');
    }
    Public function news($title){
        return view('news', ['title' => $title]);
    }
    Public function program(){
        return view('program');
    }
    Public function aboutus(){
        return view('about-us');
    }
}
