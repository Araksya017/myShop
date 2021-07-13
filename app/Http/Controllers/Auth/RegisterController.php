<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;


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
    protected $redirectTo = '/myprofile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
//           'gender' => ['required|in:male,female'],
//            'img' => ['required', 'image'],
            'phone' => ['required', 'string', 'min:6'],
//            'usersale' => ['required', 'numeric', 'min:4'],
//            'cupon' => ['required', 'numeric', 'min:1'],
//            'point' => ['required', 'numeric', 'min:1'],
//            'adress' => ['required',  'max:255'],
//            'post' => ['required', 'string', 'max:255'],
//            'city' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
//        dd($data);
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
//            'gender' => $data['gender'],
//            'img' => $data['img'],
            'phone' => $data['phone'],
//            'usersale' => $data['usersale'],
//            'cupon' => $data['cupon'],
//            'point' => $data['point'],
//            'city' => $data['city'],
//            'adress' => $data['adress'],
//            'post' => $data['post'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            Auth::user()
        ]);
    }

//    //avelacratc
//
//    protected function guard()
//    {
//        return Auth::guard('guard-name');
//    }


}
