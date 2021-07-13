<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

    protected $redirectTo = '/myprofile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $user = Auth::user();
//       dd($user);
//        $this->middleware('guest')->except('logout');
       return view('auth/login');

    }

//    //avelacratc 17.05
    public function logout(Request $request) {
//        Auth::logout();
//        return redirect('/login');

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');

    }

//avelacratc

//   public function username()
//    {
//        return 'username';
//    }
//////
//    protected function guard()
//   {
//       return Auth::guard('guard-name');
//    }


//    //avelacratc 24.05
//    /**
//
//     * Create a new controller instance.
//
//     *
//
//     * @return void
//
//     */
//
//    public function login(Request $request)
//
//    {
//
//        $input = $request->all();
//
//
//
//        $this->validate($request, [
//
//            'username' => 'required',
//
//            'password' => 'required',
//
//        ]);
//
//
//
//        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
//
//        if(auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password'])))
//
//        {
//
//            return redirect()->route('home');
//
//        }else{
//
//            return redirect()->route('login')
//
//                ->with('error','Email-Address And Password Are Wrong.');
//
//        }
//
//
//
//    }





}
