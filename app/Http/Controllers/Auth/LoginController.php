<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = '/login';

     public function login(Request $request)
    {
        $next = session()->get('url.intended');

        if ( Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ],$request->has('remember'))){
            if(session()->has('url.intended'))
            {
                $next = session()->get('url.intended');
            }
            if (Auth::user()->type == 'admin')
                return redirect('/home');
            
            // elseif (Auth::user()->type == 'user'){

            //     return redirect('/');
            // }
            else
                return redirect('/login');
            
        }
        else
            return redirect('/login')->withErrors([
                'credentials' => 'Please, check your credentials'
            ]);


    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
