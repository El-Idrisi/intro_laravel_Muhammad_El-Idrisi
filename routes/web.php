<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [AuthController::class, 'showRegister']);
Route::get('/welcome', [AuthController::class, 'welcome']);
Route::get('/table', function() {
    return view('tabel');
});
Route::get('/datatable', function() {
    return view('datatable');
});
