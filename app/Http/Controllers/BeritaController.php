<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index() {
        $berita = Berita::latest()->get();
        return view('berita.index', compact('berita'));
    }

    public function show(Berita $berita) {
        return view('berita.detail', compact('berita'));
    }
}