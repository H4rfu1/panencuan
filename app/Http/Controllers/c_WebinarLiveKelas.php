<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\m_WebinarLiveKelas;
use Auth;

class c_WebinarLiveKelas extends Controller
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

    public function listWebinarLiveKelas()
    {
        $data = m_WebinarLiveKelas::join('users', 'data_video.id_pemateri', '=', 'users.id')
        ->get();
        // dd($datapencatatan);
        if (Auth::check()) {
            if (Auth::user()->role_id == 1) {
                return view('member.listPembelajaran', ['data' => $data]);
            }elseif(Auth::user()->role_id == 3){
                return view('pemateri.listVideo', ['data' => $data]);
            }else{
                return view('home');
            }
        }else{
            return view('auth.login');
        }
        
    }

    public function addWebinarLiveKelas()
    {
        return view('pemateri.uploadvideo');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeWebinarLiveKelas(Request $request)
    {
        $fileName = '';
            if($request->hasFile('video')){
            $file = $request->file('video');
            $fileName = uniqid(). '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/video', $fileName);
            }
            if($fileName != ''){
                m_WebinarLiveKelas::create([
                    'id_pemateri' => $request->id,
                    'judul' => $request->judul,
                    'url_video' => $fileName,
                    'deskripsi_video' => $request->deskripsi
                ]);
                return redirect('video')->with('status', 'Berhasil Menambahkan Data Video');
            }else{
                return redirect('uploadvideo')->with('status', 'Gagal Menambahkan Data Video');
            }
            
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showWebinarLiveKelas($id)
    {

        $data = m_WebinarLiveKelas::join('users', 'data_video.id_pemateri', '=', 'users.id')
        ->where('id_video', $id)->first();
        // dd($data);
        return view('pemateri.detailvideo', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editWebinarLiveKelas($id)
    {

        $data = m_WebinarLiveKelas::where('id_video', $id)->first();

        // dd($data);
        return view('pemateri.editvideo', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateWebinarLiveKelas(Request $request, $id)
    {
        $fileName = '';
        if($request->hasFile('video')){
            $file = $request->file('video');
            $fileName = uniqid(). '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/video', $fileName);
            }
            if($fileName != ''){
                m_WebinarLiveKelas::where('id_video', $id)
                ->update([
                    'id_pemateri' => $request->id,
                    'judul' => $request->judul,
                    'url_video' => $fileName,
                    'deskripsi_video' => $request->deskripsi
                ]);
                return redirect('video')->with('status', 'Berhasil Mengupdate Data Video');
            }else{
                m_WebinarLiveKelas::where('id_video', $id)
                ->update([
                    'id_pemateri' => $request->id,
                    'judul' => $request->judul,
                    'deskripsi_video' => $request->deskripsi
                ]); 
            return redirect('video')->with('status', 'Berhasil Mengupdate Data Video');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        M_DataPencatatan::destroy($id);
        return redirect('pencatatan')->with('status', 'Data Pencatatan Perkembangan Melon Berhasil Dihapus');
    }
}