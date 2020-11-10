<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('profil');
    }
    public function profiledit()
    {
        return view('profiledit');
    }
    public function admin()
    {
        return view('admin.dashboard');
    }
    public function user()
    {
        return view('admin.user');
    }
    public function pemateri()
    {
        return view('admin.pemateri');
    }
}
