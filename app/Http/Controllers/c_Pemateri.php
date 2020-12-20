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
            'id_pembuat' => $request->id,
            'judul_diskusi' => $request->judul_diskusi,
            'deskripsi_diskusi' => $request->deskripsi_diskusi,
            'tanggal_dibuat' => date("Y-m-d H:i:s")
        ]);
        return redirect('diskusi')->with('status', 'Berhasil Dibuat');
    }
}