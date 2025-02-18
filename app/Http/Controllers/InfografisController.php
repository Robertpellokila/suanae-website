<?php

namespace App\Http\Controllers;

use App\Models\Infografis;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class InfografisController extends Controller
{
    public function index() {
        $info = Infografis::first();
        $dataPenduduk = Penduduk::orderBy('tahun')->get();
        $data = Penduduk::latest()->first();

        return view('infografis.index', compact('info', 'dataPenduduk', 'data'));
    }


}