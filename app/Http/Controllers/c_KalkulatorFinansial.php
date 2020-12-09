<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\m_videoPembelajaran;
use Auth;

class c_KalkulatorFinansial extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function KalkulatorFinansial(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->role_id == 1) {
                if($request->has('waktu')){
                    $nominal = intval($request->nominal);
                    $return = intval($request->return);
                    $waktu = intval($request->waktu);
                    $hasil = ($nominal + ($return * $nominal)) * $waktu;
                    $scroll = true;
                }else{
                    $hasil = '';
                    $nominal = '';
                    $return = '';
                    $waktu = '';
                    $scroll = false;
                }
                return view('member.V_KalkulatorFinansial', compact('hasil', 'return', 'nominal', 'waktu', 'scroll'));
            
            }else{
                return view('home');
            }
        }else{
            return view('auth.login');
        }
        
    }

}