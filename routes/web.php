<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/{id}', [PegawaiController::class, 'show'])->name('pegawai.show');

Route::get('/api/pegawai', [PegawaiController::class, 'api']);


Route::redirect('/', '/pegawai');
