<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }

    function save(Request $request){
        return $request->input();
    }
}