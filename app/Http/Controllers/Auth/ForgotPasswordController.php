<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;


class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function forgetpw(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|:users',
        ]);

        $user=User::whereEmail($request->email)->first();

        if($user == null){
            return redirect()->back()->withErrors('error', 'email tidak terdaftar');
        }
        else{
            $user->update([
                'activation_token'=>rand(100000, 999999),
            ]);

            return redirect ('verifikasitoken')->with('berhasil', 'silahkan cek email anda');
        }

    }
}
