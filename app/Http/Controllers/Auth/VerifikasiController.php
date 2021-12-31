<?php

namespace App\Http\Controllers\Auth;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class VerifikasiController extends Controller
{
    public function verifikasitoken()
    {
        return view('auth.veriftokenaja');
    }

    public function postveriftoken(Request $request)
    {
        $user=User::whereActivation_token($request->activation_token)->first();

        if($user==null){
            return redirect()->back()->with('error', 'token anda salah');
        }else{
            $user->update([
                'activation_token'=>rand(100000, 999999),
            ]);
            return redirect()->route('password.reset', [$user->activation_token])->with('succes', 'silahkan anda reset password');
        }
    }
}
