<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', [MahasiswaController::class, 'index']);

Route::post('/store', [MahasiswaController::class, 'store']);

Route::put('/update/{id}', [MahasiswaController::class, 'update']);

Route::delete('/delete/{id}', [MahasiswaController::class, 'destroy']);
