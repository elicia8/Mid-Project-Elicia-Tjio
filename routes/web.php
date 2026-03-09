<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/create', function () {
    return view('create');
});
Route::get('/listkaryawan', function () {
    return view('listkaryawan');
});
Route::post('/listkaryawan', [KaryawanController::class, 'store']);