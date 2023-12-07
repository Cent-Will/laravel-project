<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\LoginController;
// use Illuminate\Support\Facades\Auth;

Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('postlogin');


Route::get('/home',[HomeController::class, 'index']);
Route::get('/add', [AddController::class, 'index']);
Route::post('/add/post', [AddController::class, 'create']);


// Route::get('/gatau', function(){
//     return '<script>alert("woy")</script>';
// });