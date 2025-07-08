<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EskulController;
use App\Http\Controllers\JadwalController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('eskul', EskulController::class)->middleware('auth', 'is_admin');
Route::resource('jadwal', JadwalController::class)->middleware('auth', 'is_admin');