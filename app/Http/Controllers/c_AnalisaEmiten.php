<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\m_AnalisaEmiten;
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
        
        $data = m_AnalisaEmiten::join('users', 'analisa_emiten.id_pemateri', '=', 'users.id')
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
    public function setFormAnalisaEmiten()
    {
        return view('pemateri.V_BuatAnalisaEmiten');
    }

    public function simpanAnalisaEmiten(Request $request)
    {

        m_AnalisaEmiten::create([
            'id_pemateri' => $request->id_pemateri,
            'kode_saham' => $request->kode_saham,
            'health' => $request->health,
            'growth' => $request->growth,
            'value' => $request->value
        ]);
        return redirect('emiten')->with('status', 'Berhasil Menambahkan Data Analisa Emiten');
    }

    
    public function editAnalisaEmiten($id)
    {

        $data = m_AnalisaEmiten::where('id_emiten', $id)->first();

        // dd($data);
        return view('pemateri.editemiten', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAnalisaEmiten(Request $request, $id)
    {
            m_AnalisaEmiten::where('id_emiten', $id)
            ->update([
            // 'kode_saham' => $request->kode_saham,
            'health' => $request->health,
            'growth' => $request->growth,
            'value' => $request->value
            ]);
        return redirect('emiten')->with('status', 'Berhasil Mengupdate Data Analisa Emiten');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        m_AnalisaEmiten::destroy($id);
        return redirect('emiten')->with('status', 'Data Analisa Emiten Berhasil Dihapus');
    }



}