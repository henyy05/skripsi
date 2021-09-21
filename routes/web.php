<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PetaController;

//use App\Http\Controllers\WebController;

//Route::get('/', [WebController::class, 'index']);

Auth::routes();

//Dasboard
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('beritas', App\Http\Controllers\BeritaController::class);


Route::get('/', [FrontendController::class, 'index']);

Route::get('/profile', [FrontendController::class, 'profile']);

Route::get('/peta', [PetaController::class, 'peta'])->name('peta');

Route::get('/berita/{berita}', [FrontendController::class, 'show'])->name('berita.detail');

Route::get('/sawah', [PetaController::class, 'getSawah']);

Route::get('/jagung', [PetaController::class, 'getJagung']);

Route::get('/padi_ladang', [PetaController::class, 'getPadiLadang']);

Route::get('/intersection', [PetaController::class, 'getIntersection']);

Route::get('/bataskelurahan', [PetaController::class, 'getBatasKelurahan']);











