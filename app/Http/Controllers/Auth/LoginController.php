<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();
        //$auth=Auth::user();
        //$auth=Auth::user()->id;
        $this->validate($request, [
            'groupName' => 'required',
            'password' => 'required',
        ]);
        if(auth()->attempt(array('groupName' => $input['groupName'], 'password' => $input['password'])))
        {
            // if(Auth::user()->status == '3'){
            //     return redirect()->route('getGroupsDashboard');
            // }
            // else{
            //     return redirect()->route('dashboardView');
            // }
            return redirect()->route('ValidasiUser');
        }else{
            return redirect()->route('login')
                ->with('error','Group Name And Password Are Wrong.');
        }

    }
}
