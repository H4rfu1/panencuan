<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\m_videoPembelajaran;
use Auth;

class c_AnalisaEmiten extends Controller
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

    public function AnalisaEmiten()
    {
        
        $data = m_videoPembelajaran::join('users', 'data_video.id_pemateri', '=', 'users.id')
        ->get();
        // dd($datapencatatan);
        if (Auth::check()) {
            if (Auth::user()->role_id == 1) {
                return view('member.V_AnalisaEmiten', compact('data'));
            }elseif(Auth::user()->role_id == 3){
                return view('pemateri.V_AnalisaEmiten', compact('data'));
            }else{
                return view('home');
            }
        }else{
            return view('auth.login');
        }
    }

}