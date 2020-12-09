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
        $data = m_WebinarLiveKelas::join('users', 'webinar_livekelas.id_pembuat', '=', 'users.id')
        ->get();
        // dd($data);
        if (Auth::check()) {
            if (Auth::user()->role_id == 1) {
                return view('member.listWebinarLiveKelas', ['data' => $data]);
            }elseif(Auth::user()->role_id == 3  || Auth::user()->role_id == 2){
                return view('admin.listWebinarLiveKelas', ['data' => $data]);
            }else{
                return view('home');
            }
        }else{
            return view('auth.login');
        }
        
    }

    public function addWebinarLiveKelas()
    {
        return view('admin.uploadWebinarLiveKelas');
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
            if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = uniqid(). '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/image', $fileName);
            }
            if($fileName != ''){
                m_WebinarLiveKelas::create([
                    'id_pembuat' => $request->id,
                    'judul' => $request->judul,
                    'opsi' => $request->opsi,
                    'deskripsi' => $request->deskripsi,
                    'waktu' => $request->waktu,
                    'harga' => $request->harga,
                    'kuota' => $request->kuota,
                    'image' => $fileName
                ]);
                return redirect('webinar')->with('status', 'Berhasil Menambahkan Data webinar/live kelas');
            }else{
                return redirect('uploadwebinar')->with('status', 'Gagal Menambahkan Data webinar/live kelas');
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

        $data = m_WebinarLiveKelas::join('users', 'webinar_livekelas.id_pembuat', '=', 'users.id')
        ->where('id_webinar_livekelas', $id)->first();
        // dd($data);
        if (Auth::check()) {
            if (Auth::user()->role_id == 1) {
                return view('member.V_DaftarWebinarLiveKelas', ['data' => $data]);
            }elseif(Auth::user()->role_id == 3  || Auth::user()->role_id == 2){
                return view('admin.detailWebinarLiveKelas', ['data' => $data]);
            }else{
                return view('home');
            }
        }else{
            return view('auth.login');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function editWebinarLiveKelas($id)
    // {

    //     $data = m_WebinarLiveKelas::where('id_video', $id)->first();

    //     // dd($data);
    //     return view('pemateri.editvideo', ['data' => $data]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function updateWebinarLiveKelas(Request $request, $id)
    // {
    //     $fileName = '';
    //     if($request->hasFile('video')){
    //         $file = $request->file('video');
    //         $fileName = uniqid(). '.' . $file->getClientOriginalExtension();
    //         $file->storeAs('public/video', $fileName);
    //         }
    //         if($fileName != ''){
    //             m_WebinarLiveKelas::where('id_video', $id)
    //             ->update([
    //                 'id_pemateri' => $request->id,
    //                 'judul' => $request->judul,
    //                 'url_video' => $fileName,
    //                 'deskripsi_video' => $request->deskripsi
    //             ]);
    //             return redirect('video')->with('status', 'Berhasil Mengupdate Data Video');
    //         }else{
    //             m_WebinarLiveKelas::where('id_video', $id)
    //             ->update([
    //                 'id_pemateri' => $request->id,
    //                 'judul' => $request->judul,
    //                 'deskripsi_video' => $request->deskripsi
    //             ]); 
    //         return redirect('video')->with('status', 'Berhasil Mengupdate Data Video');
    //     }
        
    // }

    public function storepurchase(Request $request)
    {
        if (Auth::check()) {
            $fileName = '';
            if($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $fileName = uniqid(). '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/image', $fileName);
            }
            if($fileName != ''){
                DB::table('verifikasi_webinar_livekelas')->insert(
                    [
                        'id_user' => $request->id, 
                        'foto' => $fileName, 
                        'status_verif' => 'belum verifikasi',
                        'id_webinar_livekelas' => $request->plan_id
                    ]
                );
                return redirect('webinar')->with('status', 'Mohon untuk menunggu verifikasi dari admin');
            }else{
                return "gagal upload";
            }
            
            
        }else{
            return redirect('login');
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