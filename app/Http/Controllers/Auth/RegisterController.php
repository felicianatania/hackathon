<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'groupName' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'status' => ['required', 'integer'],
            'fullname' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'WA' => ['required', 'min:9', 'string'],
            'lineId' => ['required'],
            'github' => ['required'],
            'birthPlace' => ['required'],
            'birthDate' => ['required', 'date', 'before:-17 years'],
            'CV' => ['required', 'mimes:jpg,png,jpeg,pdf'],
            'IdCard' => ['required', 'mimes:jpg,png,jpeg,pdf'],
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $CVName = request()->file('CV')->getClientOriginalName();
        $CV = request()->file('CV')->storeAs('file-data', $CVName);

        $IdCard_file_name = request()->file('IdCard')->getClientOriginalName();
        $IdCard = request()->file('IdCard')->storeAs('file-data', $IdCard_file_name);

        return User::create([
            'groupName' => $data['groupName'],
            'password' => Hash::make($data['password']),
            'status' => $data['status'],
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'WA' => $data['WA'],
            'lineId' => $data['lineId'],
            'github' => $data['github'],
            'birthPlace' => $data['birthPlace'],
            'birthDate' => $data['birthDate'],
            'CV' => $CV,
            'IdCard' => $IdCard
        ]);

    }
}
