<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\LoginController;

Route::get('/', [MessageController::class,'index'])->name('index');

Route::get('/reg', [RegController::class,'showRegister'])->name('showRegister');
Route::post('/reg', [RegController::class,'register'])->name('register');

Route::get('/login', [LoginController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/create', [CreateController::class, 'showCreate'])->name('showCreate');
Route::post('/create', [CreateController::class, 'create'])->name('create');
