<?php

namespace App\Http\Controllers;

use App\Models\Aparatur;
use App\Models\Berita;
use App\Models\Home;
use App\Models\Kades;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $images = Home::all();
        $berita = Berita::latest()->take(3)->get();
        $kades = Kades::all();
        $aparatur = Aparatur::take(3)->get();
        
        return view('home', compact('images', 'berita', 'kades', 'aparatur' ));
    }
}