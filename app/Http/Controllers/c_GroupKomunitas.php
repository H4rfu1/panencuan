<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\m_GroupKomunitas;
use Auth;
class c_GroupKomunitas extends Controller
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

    public function listGroupKomunitas()
    {
        $data = m_GroupKomunitas::join('users', 'grup komunitas.id_user', '=', 'users.id')
        ->get();

        if (Auth::check()) {
            if (Auth::user()->role_id == 1) {
                return view('komunitas.v_groupkomunitas', compact('data'));
            }elseif(Auth::user()->role_id == 3){
                return view('komunitas.v_groupkomunitas', compact('data'));
            }else{
                return view('home');
            }
        }else{
            return view('auth.login');
        }

        return view('komunitas.v_groupkomunitas', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function setGroupKomunitas(Request $request)
    {
        //metode sistem pakar
        m_GroupKomunitas::create([
            'id_user' => $request->id,
            'komentar' => $request->komen,
            'tanggal_komen' => date("Y-m-d H:i:s")
        ]);

            return redirect('komunitas')->with('status', 'Berhasil Menambahkan Data Pencatatan Perkembangan Melon');
        
    }

}