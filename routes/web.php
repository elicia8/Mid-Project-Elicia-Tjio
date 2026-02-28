<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [KaryawanController::class, 'index']);
Route::get('/tambah', [KaryawanController::class, 'create']);
Route::post('/', [KaryawanController::class, 'store']);
Route::get('/edit/{id}', [KaryawanController::class, 'edit']);
Route::post('/edit/update/{id}', [KaryawanController::class, 'update']);
Route::get('/delete/{id}', [KaryawanController::class, 'destroy']);