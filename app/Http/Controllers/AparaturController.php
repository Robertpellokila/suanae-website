<?php

namespace App\Http\Controllers;

use App\Models\Aparatur;
use App\Models\Kades;
use App\Models\Profil;
use Illuminate\Http\Request;

class AparaturController extends Controller
{
    public function index() {
        $data = Aparatur::all();
        $kades = Kades::first();
        $bagan = Profil::first();

        return view('aparatur.index', compact('data', 'kades', 'bagan'));
    }
}