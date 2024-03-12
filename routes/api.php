<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RolesController;
use App\Http\Controllers\Api\JenjangController;
use App\Http\Controllers\Api\KelasController;
use App\Http\Controllers\Api\MataPelajaranController;
use App\Http\Controllers\Api\BabMateriController;
use App\Http\Controllers\Api\MateriController;
use App\Http\Controllers\Api\LatihanSoalController;
use App\Http\Controllers\Api\JadwalController;
use App\Http\Controllers\Api\RiwayatController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('roles', [RolesController::class, 'index']);
Route::post('roles', [RolesController::class, 'store']);
Route::get('roles/{role}', [RolesController::class, 'show']);
Route::put('roles/{role}', [RolesController::class, 'update']);
Route::delete('roles/{role}', [RolesController::class, 'destroy']);


Route::get('jenjangs', [JenjangController::class, 'index']);
Route::post('jenjangs', [JenjangController::class, 'store']);
Route::get('jenjangs/{jenjang}', [JenjangController::class, 'show']);
Route::put('jenjangs/{jenjang}', [JenjangController::class, 'update']);
Route::delete('jenjangs/{jenjang}', [JenjangController::class, 'destroy']);


Route::get('kelas', [KelasController::class, 'index']);
Route::post('kelas', [KelasController::class, 'store']);
Route::get('kelas/{kelas}', [KelasController::class, 'show']);
Route::put('kelas/{kelas}', [KelasController::class, 'update']);
Route::delete('kelas/{kelas}', [KelasController::class, 'destroy']);


Route::get('mata_pelajarans', [MataPelajaranController::class, 'index']);
Route::post('mata_pelajarans', [MataPelajaranController::class, 'store']);
Route::get('mata_pelajarans/{mataPelajaran}', [MataPelajaranController::class, 'show']);
Route::put('mata_pelajarans/{mataPelajaran}', [MataPelajaranController::class, 'update']);
Route::delete('mata_pelajarans/{mataPelajaran}', [MataPelajaranController::class, 'destroy']);


Route::get('bab_materis', [BabMateriController::class, 'index']);
Route::post('bab_materis', [BabMateriController::class, 'store']);
Route::get('bab_materis/{babMateri}', [BabMateriController::class, 'show']);
Route::put('bab_materis/{babMateri}', [BabMateriController::class, 'update']);
Route::delete('bab_materis/{babMateri}', [BabMateriController::class, 'destroy']);


Route::get('materis', [MateriController::class, 'index']);
Route::post('materis', [MateriController::class, 'store']);
Route::get('materis/{materi}', [MateriController::class, 'show']);
Route::put('materis/{materi}', [MateriController::class, 'update']);
Route::delete('materis/{materi}', [MateriController::class, 'destroy']);


Route::get('latihan_soals', [LatihanSoalController::class, 'index']);
Route::post('latihan_soals', [LatihanSoalController::class, 'store']);
Route::get('latihan_soals/{latihanSoal}', [LatihanSoalController::class, 'show']);
Route::put('latihan_soals/{latihanSoal}', [LatihanSoalController::class, 'update']);
Route::delete('latihan_soals/{latihanSoal}', [LatihanSoalController::class, 'destroy']);


Route::get('jadwals', [JadwalController::class, 'index']);
Route::post('jadwals', [JadwalController::class, 'store']);
Route::get('jadwals/{jadwal}', [JadwalController::class, 'show']);
Route::put('jadwals/{jadwal}', [JadwalController::class, 'update']);
Route::delete('jadwals/{jadwal}', [JadwalController::class, 'destroy']);


Route::get('riwayats', [RiwayatController::class, 'index']);
Route::post('riwayats', [RiwayatController::class, 'store']);
Route::get('riwayats/{riwayat}', [RiwayatController::class, 'show']);
Route::put('riwayats/{riwayat}', [RiwayatController::class, 'update']);
Route::delete('riwayats/{riwayat}', [RiwayatController::class, 'destroy']);
