<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/profil', function(){
    return view('profil');
})->middleware('auth');

Route::get('/produk', function(){
    return view('produk');
})->middleware('auth');

Route::get('/produk/detil', function(){
    return view('detil-produk');
})->middleware('auth');

Route::get('/login',         [LoginController::class, 'halamanLogin'])->name('login');
Route::post('/proses-login', [LoginController::class, 'prosesLogin']);
Route::get('/logout',        [LoginController::class, 'logout'])->middleware('auth');

Route::get('/ganti-password', [LoginController::class, 'halamanGantiPassword'])->middleware('auth');
Route::post('/proses-ganti-password', [LoginController::class, 'prosesGantiPassword'])->middleware('auth');

Route::get('/daftar', [DaftarController::class, 'halamanDaftar']);
Route::post('/proses-daftar', [DaftarController::class, 'prosesDaftar']);

Route::get('/users', [UserController::class, 'halamanDaftarUser'])->middleware('auth');
