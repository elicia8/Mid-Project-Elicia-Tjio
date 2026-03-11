<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/create', function () {
    return view('create');
});
Route::get('/edit/{id}', [KaryawanController::class, 'edit']);
Route::put('/update/{id}', [KaryawanController::class, 'update']);
Route::get('/delete/{id}', [KaryawanController::class, 'destroy']);
Route::get('/listkaryawan', [KaryawanController::class, 'read']);
Route::post('/listkaryawan', [KaryawanController::class, 'store']);