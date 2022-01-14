<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class validasicontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function validasiUser(){
        if(Auth::user()->status == '3'){
                return view('welcome');
            }
            else{
                return view('welcome');
            }
    }
}
