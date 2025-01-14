<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/sejarah', [App\Http\Controllers\HomeController::class, 'tampilSejarah'])->name('sejarah');
Route::get('/hak-cipta', [App\Http\Controllers\HomeController::class, 'tampilHakCipta'])->name('hakcipta');
Route::get('/pasca-hak-cipta', [App\Http\Controllers\HomeController::class, 'tampilPascaHakCipta'])->name('pascahakcipta');