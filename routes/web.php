<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PotensiDesaController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\TempatIbadahController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//desa
Route::get('/desa', [DesaController::class, 'index'])->name('desa');
Route::get('/desa/add', [DesaController::class, 'add']);
Route::post('/desa/insert', [DesaController::class, 'tambah']);
Route::get('/desa/edit/{id}', [DesaController::class, 'edit']);
Route::post('/desa/update/{id}', [DesaController::class, 'update']);
Route::get('/desa/delete/{id}', [DesaController::class, 'delete']);

//user
Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna');

//potensidesa
Route::get('/potensidesa', [PotensiDesaController::class, 'index'])->name('potensidesa');
Route::get('/potensidesa/add', [PotensiDesaController::class, 'add']);
Route::post('/potensidesa/insert', [PotensiDesaController::class, 'insert']);
Route::get('/potensidesa/edit/{id}', [PotensiDesaController::class, 'edit']);
Route::post('/potensidesa/update/{id}', [PotensiDesaController::class, 'update']);
Route::get('/potensidesa/delete/{id}', [PotensiDesaController::class, 'delete']);

//sekolah
Route::get('/sekolah', [SekolahController::class, 'index'])->name('sekolah');
Route::get('/sekolah/add', [SekolahController::class, 'add']);
Route::post('/sekolah/insert', [SekolahController::class, 'insert']);
Route::get('/sekolah/edit/{id}', [SekolahController::class, 'edit']);
Route::post('/sekolah/update/{id}', [SekolahController::class, 'update']);
Route::get('/sekolah/delete/{id}', [SekolahController::class, 'delete']);

//tempat ibadah
Route::get('/tempatibadah', [TempatIbadahController::class, 'index'])->name('tempatibadah');