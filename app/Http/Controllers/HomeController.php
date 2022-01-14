<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $groups = User::all()->except(1);
        $group=Auth::id();
        if($group === 1){
            return view('adminPanel.dashboard', ['groups' => $groups]);
        }else{
            return view('member.dashboard');
        }

    }
}
