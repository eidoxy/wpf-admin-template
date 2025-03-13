<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', [DashboardController::class, 'index']);
Route::resource('mahasiswa', MahasiswaController::class);