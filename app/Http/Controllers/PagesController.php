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
}
