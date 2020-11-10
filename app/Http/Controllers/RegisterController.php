<?php

namespace App\Http\Controllers;

use App\Investor;
use App\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        $this->validate($data,[
            // 'nohp'=>'required|min:11|max:13|regex:/(08)[0-9]{9}/',
            'username'=>'required|unique:users',
        ]);

        $user =  Register::create([
            'role'      => $data['role'],
            'username'  => $data['username'],
            'password'  => Hash::make($data['password']),
        ]);

        if ($data['role'] == "petani") {
            $alamat = \App\Alamat::create([
                'alamat' => $data['alamat'],
                'kota' => $data['ddlKota'],
                'provinsi' => $data['ddlProvinsi'],
            ]);

            $file = $data->file('img');
            $name = time();
            $extension = $file->getClientOriginalExtension();
            $newName = $name . '.' .$extension;

            $file2 = $data->file('img2');
            $name2 = time()+1;
            $extension2 = $file2->getClientOriginalExtension();
            $newName2 = $name2 . '.' .$extension2;
            // dd($newName,$newName2);
            // dd();
            Storage::putFileAs('public/img', $data->file('img'), $newName);
            Storage::putFileAs('public/img', $data->file('img2'), $newName2);

            \App\Farmer::create([
                'id_user' => $user->id,
                'nama_petani'    => $data['nama'],
                'no_ponsel_petani'    => $data['nohp'],
                'tanggal_lahir_petani'    => $data['tgllahir'],
                'jenis_kelamin'    => $data['jeniskelamin'],
                'jenis_identitas'   => $data['jenisidentitas'],
                'no_identitas_petani'    => $data['noidentitas'],
                'id_alamat'    => $alamat->id,
                'email_petani'    => $data['email'],
                'foto_ktp_petani'    => 'stoage/' . $newName,
                'foto_lahan_hidroponik' => 'storage/' . $newName2,
            ]);
        }
        elseif ($data['role'] == "investor") {

            $alamat = \App\Alamat::create([
                'alamat' => $data['alamat'],
                'kota' => $data['ddlKota'],
                'provinsi' => $data['ddlProvinsi'],
            ]);

            $file = $data->file('img');
            $name = time();
            $extension = $file->getClientOriginalExtension();
            $newName = $name . '.' .$extension;
            // dd($newName);
            Storage::putFileAs('public/img', $data->file('img'), $newName);

            \App\Investor::create([
                'id_user' => $user->id,
                'nama_investor'    => $data['nama'],
                'no_ponsel_investor'    => $data['nohp'],
                'tanggal_lahir_investor'    => $data['tgllahir'],
                'jenis_kelamin'    => $data['jeniskelamin'],
                'jenis_identitas'    => $data['jenisidentitas'],
                'no_identitas_investor'    => $data['noidentitas'],
                'id_alamat'    => $alamat->id,
                'email_investor'    => $data['email'],
                'foto_ktp_investor'    => 'stoage/' . $newName,
            ]);
            
        }
        return redirect('login')->with('sukses', 'Selamat anda berhasil membuat akun');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function show(Investor $investor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function edit(Investor $investor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investor $investor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investor $investor)
    {
        //
    }
}
