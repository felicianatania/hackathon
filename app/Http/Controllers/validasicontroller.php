<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class validasicontroller extends Controller
{
    public function validasiUser(){
        if(Auth::user()->status == '3'){
                return redirect()->route('getGroupsDashboard');
            }
            else{
                return redirect()->route('dashboardView');
            }
    }
}
