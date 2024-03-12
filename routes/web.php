<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\HomeController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'user-access:Admin'])->group(function () {
    Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.dashboard');
});

// Route untuk guru
Route::middleware(['auth', 'user-access:Guru'])->group(function () {
    Route::get('/guru/home', [App\Http\Controllers\HomeController::class, 'guruHome'])->name('guru.dashboard');
});

Route::middleware(['auth', 'user-access:Siswa'])->group(function () {
    Route::get('/siswa/home', [App\Http\Controllers\HomeController::class, 'siswaHome'])->name('siswa.index');
});

