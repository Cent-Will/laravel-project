<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;


Route::get('/', [LoginController::class, 'index']);
Route::post('/loginsuccess', [LoginController::class, 'login'])->name('postlogin');
// Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::middleware(['auth'])->group (function () {
    // Rute-rute yang memerlukan autentikasi di sini
    Route::get('/home',[HomeController::class, 'index'])->name('home');
    Route::get('/add', [AddController::class, 'index'])->name('add');
    Route::post('/add/success', [AddController::class, 'add'])->name('addData');
// });

// Route::get('/gatau', function(){
//     return '<script>alert("woy")</script>';
// });