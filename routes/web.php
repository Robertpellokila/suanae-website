<?php

use App\Http\Controllers\AparaturController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdmController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\PpidController;
use App\Http\Controllers\ProfilController;
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
Route::get('/Sambutan', [HomeController::class, 'show'])->name('sambutan');

Route::get('/Profil', [ProfilController::class, 'index'])->name('profil');

Route::get('/sejarah', [ProfilController::class, 'sejarah'])->name('sejarah');

Route::get('/Infografis', [InfografisController::class, 'index'])->name('grafis');


Route::get('/Berita', [BeritaController::class, 'index'])->name('berita');

Route::get('/Berita/{berita:slug}', [BeritaController::class, 'show'])->name('berita.detail');

Route::get('/Profil/Aparatur', [AparaturController::class, 'index'])->name('aparatur');

Route::get('/Galeri', [GaleriController::class, 'index'])->name('galeri');

Route::get('/idm', [IdmController::class, 'index'])->name('idm');

Route::get('/listing', [ListingController::class, 'index'])->name('listing');