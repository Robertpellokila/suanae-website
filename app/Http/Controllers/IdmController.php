<?php

namespace App\Http\Controllers;

use App\Models\Idm;
use Illuminate\Http\Request;

class IdmController extends Controller
{
    public function index(){
        $idm = Idm::latest()->first();

        return view('idm.index', compact('idm'));
    }
}