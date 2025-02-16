<?php

namespace App\Http\Controllers;

use App\Models\Aparatur;
use App\Models\Kades;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index() {
     $profil = Profil::first();
     $aparatur = Aparatur::take(2)->get();
     $kades = Kades::all();

     return view('profil.index' , compact ('profil', 'aparatur', 'kades'));
    }

    public function sejarah() {
        $sejarah = Profil::first();
        return view('profil.sejarah', compact('sejarah'));
    }
}