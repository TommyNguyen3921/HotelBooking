<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        
        $title ='Welcome To Laravel!';
        return view('pages.index');
    }

    public function booking(){
        return view('pages.booking');
    }

    public function about(){
        return view('pages.about');
    }
}
