<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\DesaController;

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