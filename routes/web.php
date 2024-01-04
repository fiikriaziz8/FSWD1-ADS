<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\CutiController;

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

Route::get('/', [KaryawanController::class, 'index']);

#KARYAWAN
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/all', [KaryawanController::class, 'all_karyawan']);
Route::get('/karyawan/first3', [KaryawanController::class, 'karyawan_first_3']);
Route::post('/karyawan/post-karyawan', [KaryawanController::class, 'post_karyawan']);
Route::post('/karyawan/hapus', [KaryawanController::class, 'delete_karyawan']);

#CUTI
Route::get('/cuti', [CutiController::class, 'index']);
Route::post('/cuti/post', [CutiController::class, 'post_cuti']);
Route::get('/karyawan_with_cuti', [CutiController::class, 'karyawan_with_cuti']);
Route::get('/sisa_cuti_karyawan', [CutiController::class, 'karyawan_sisa_cuti']);