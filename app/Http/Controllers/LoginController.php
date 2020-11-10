<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{   

    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request) {
    
        if (Auth::attempt($request->only('username', 'password'))) {
            // dd(Auth::attempt($request->only('username', 'password')));
            Auth::check();
            $user = \App\Register::where('username', $request->username)->first();
            // dd($user);
            if ($user->role === 'admin') {
                // dd(Auth::attempt($request->only('username', 'password')),Auth::user()->role);
                return redirect('/dashboard');
            }
            else if ($user->role === 'petani') {
                // dd(Auth()->user()->role);
                return redirect('/petani/dashboard');
            }
            else if ($user->role === 'investor') {
                return redirect('/investor/dashboard');
            }
        }
        return redirect('/login')->with('error', 'Harap memasukan data dengan benar');
    }

    
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
    
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

//     public function __construct()
// {
//     $this->middleware(['checkRole:admin,petani,investor']);
// }
}
