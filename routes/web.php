<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\TerapisController;
use App\Http\Controllers\guestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [DashboardController::class, 'index']);
Route::resource('pelanggan', PelangganController::class);
Route::resource('treatment', TreatmentController::class);
Route::resource('terapis', TerapisController::class);
Route::resource('user', UserController::class);


Route::get('/guest', [guestController::class, 'index']);

