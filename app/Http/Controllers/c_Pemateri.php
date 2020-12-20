<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\m_pemateri;
use Auth;
class c_Pemateri extends Controller
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
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function addpemateri(Request $request)
    {
        //metode sistem pakar
        return view('admin.V_InputAkun');
    }
    public function actionBuat(Request $request)
    {
        //metode sistem pakar
        m_pemateri::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'username' => $request->username,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal' => $request->tanggal_lahir,
            'kota' => $request->kota,
            'no_hp' => $request->no_hp,
            'jurusan' => $request->jurusan,
            'status_id' => 1,
            'role_id' => 3,
            'nim' => $request->nim
            ]);
        return redirect('admin/pemateri')->with('status', 'Akun Pemateri Berhasil Dibuat');
    }
}