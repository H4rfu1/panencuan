<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\m_WebinarLiveKelas;
use Auth;

class c_VerifikasiWebinarLiveKelas extends Controller
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

    public function VerifikasiWebinarlivekelas()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }else{
            $data = DB::table('verifikasi_webinar_livekelas')
            ->join('users', 'verifikasi_webinar_livekelas.id_user', '=', 'users.id')
            ->join('webinar_livekelas', 'verifikasi_webinar_livekelas.id_webinar_livekelas', '=', 'webinar_livekelas.id_webinar_livekelas')
            ->select('verifikasi_webinar_livekelas.*', 'users.*','webinar_livekelas.*')
            ->get();
            // dd($data);
            return view('admin.v_verifikasi_webinarivekelas', compact('data'));
        }
    }

    public function DetailVerifikasiWebinarlivekelas($id)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }else{
            $data = DB::table('verifikasi_webinar_livekelas')
            ->join('users', 'verifikasi_webinar_livekelas.id_user', '=', 'users.id')
            ->join('webinar_livekelas', 'verifikasi_webinar_livekelas.id_webinar_livekelas', '=', 'webinar_livekelas.id_webinar_livekelas')
            ->select('verifikasi_webinar_livekelas.*', 'users.*','webinar_livekelas.*')
            ->where('verifikasi_webinar_livekelas.id_verifikasi_webinar_livekelas', $id)
            ->first();
            // dd($data);
            return view('admin.v_detalverifikasi_webinarivekelas', compact('data'));
        }
    }

    public function actionTolak(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }else{
            DB::table('verifikasi_webinar_livekelas')
            ->where('id_verifikasi_webinar_livekelas', $request->id)
            ->update(['status_verif' => 'ditolak']);
            return redirect('verifikasiwebinar')->with('batal', 'Verifikasi Bukti Pembayaran tidak disetujui');
        }
    }

    public function actionVerifikasi(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }else{
            DB::table('verifikasi_webinar_livekelas')
            ->where('id_verifikasi_webinar_livekelas', $request->id)
            ->update(['status_verif' => 'terverifikasi']);
            return redirect('verifikasiwebinar')->with('status', 'Verifikasi Bukti Pembayaran disetujui');
        }
    }

}