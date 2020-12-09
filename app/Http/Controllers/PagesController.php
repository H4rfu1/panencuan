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
        if (Auth::check()) {
            if (Auth::user()->role_id == 2) {
                return redirect('/admin');
            }elseif(Auth::user()->role_id == 3){
                return view('index2');
            }else{
                return view('index2');
            }
        }else{
            return view('index2');
        }
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
        $paket = DB::table('data paket')->get();
        if (!Auth::check()) {
            return redirect('/login');
        }else{
            return view('membership', compact('paket'));
        }
    }


    public function purchase($id)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }else{
            $paket = DB::table('data paket')->where('id_paket',$id)->first();
            $harga = $paket->harga;
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
                        'id_plan' => $request->plan_id
                    ]
                );
                return redirect('profil')->with('status', 'Mohon untuk menunggu verifikasi dari admin');
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
            return redirect('profil')->with('status', 'Berhasil diubah');
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
    
    public function dashboard()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }else{
            return view('pemateri.dashboard');
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
            ->join('data paket', 'verifikasi_member.id_plan', '=', 'data paket.id_paket')
            ->select('verifikasi_member.*', 'users.*','data paket.*')
            ->get();
            // dd($data);
            return view('admin.userverif', compact('data'));
        }
        
    }
    public function detailverif($id)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }else{
            $data = DB::table('verifikasi_member')
            ->join('users', 'verifikasi_member.id_user', '=', 'users.id')
            ->join('data paket', 'verifikasi_member.id_plan', '=', 'data paket.id_paket')
            ->select('verifikasi_member.*', 'users.*','data paket.*')
            ->where('verifikasi_member.id_pembayaran', $id)
            ->first();
            // dd($data);
            return view('admin.detailverif', compact('data'));
        }
        
    }
    public function memberverif(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }else{
            // dd($request->id_user);
            DB::table('verifikasi_member')
            ->where('id_pembayaran', $request->id)
            ->update(['status_verif' => 'terverifikasi']);
            

            DB::table('users')
            ->where('id', $request->id_user)
            ->update(['status_id' => 2]);
            // dd($data);
            return redirect('admin/userverif')->with('status', 'Member telah disetujui');
        }
        
    }


    public function pemateri()
    {
        return view('admin.pemateri');
    }
    public function batalverif(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }else{
            DB::table('verifikasi_member')
            ->where('id_pembayaran', $request->id)
            ->update(['status_verif' => 'tidak disetujui']);
            return redirect('admin/userverif')->with('batal', 'Member tidak disetujui');
        }
    }
}
