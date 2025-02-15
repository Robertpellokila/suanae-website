<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/Profil', function ()  {
   return view('Profil.index');
})->name('profil');

Route::get('/Infografis', function ()  {
   return view('infografis.index');
})->name('grafis');

Route::get('/Berita', function ()  {
   return view('berita.index');
})->name('berita');

Route::get('/Galeri', function ()  {
   return view('galeri.index');
})->name('galeri');