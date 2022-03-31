<?php
/*
StAuth10065: I Tommy Nguyen, 000786251 certify that this material is my original work.
 No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   

    

    public function about(){
        return view('pages.about');
    }
}
