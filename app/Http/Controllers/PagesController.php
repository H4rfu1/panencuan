<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function home()
    {
        return view('index2');
    }
    public function profil()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }else{
            return view('profil');
        }
    }
    public function membership()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }else{
            return view('membership');
        }
    }


    public function purchase($id)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }else{
            if($id == 1){
                $harga = 'Rp. 250.000';
            }elseif($id == 2){
                $harga = 'Rp. 100.000';
            }else{
                $harga = 'salah plan';
            }
            return view('purchase', ['harga' => $harga, 'id' => $id]);
        }
    }
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
                DB::table('verifikasi_member')->insert(
                    [
                        'id_user' => $request->id, 
                        'foto' => $fileName, 
                        'status_verif' => 'belum terverifikasi',
                        'id_plan' => $request->plan_id,
                        'harga' => $request->harga
                    ]
                );
                return redirect('/');
            }else{
                return "gagal upload";
            }
            
            
        }else{
            return redirect('login');
        }
    }


    public function profiledit()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }else{
            return view('profiledit');
        }
        
    }
    public function profilupdate(Request $request, $id)
    {
        User::where('id', $id)
            ->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'jenis_kelamin' => $request->jenis_kelamin,
                'kota' => $request->kota,
                'no_hp' => $request->no_hp,
                'nim' => $request->nim,
                'jurusan' => $request->jurusan
            ]);
            return redirect('profil');
            // if((int)$request->role == 1){
            //     return redirect('akun/admin')->with('status', 'Data Admin Berhasil diubah');
            // }elseif((int)$request->role == 2){
            //     return redirect('akun/pengawas')->with('status', 'Berhasil mengubah data akun pengawas');
            // }elseif((int)$request->role == 3){
            //     return redirect('akun/pemimpin')->with('status', 'Berhasil mengubah data akun pemimpin');
            // }
    }
    public function admin()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }else{
            return view('admin.dashboard');
        }
        
    }
    public function user()
    {
        return view('admin.user');
    }
    public function userverif()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }else{
            $data = DB::table('verifikasi_member')
            ->join('users', 'verifikasi_member.id_user', '=', 'users.id')
            ->select('verifikasi_member.*', 'users.*')
            ->get();
            // dd($data);
            return view('admin.userverif', compact('data'));
        }
        
    }
    public function pemateri()
    {
        return view('admin.pemateri');
    }
}
