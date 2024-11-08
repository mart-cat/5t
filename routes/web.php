<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessegeController;
use App\Models\Messeg;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['messegs' => Messeg::all()]);
});
Route::get('/log', [AuthController::class, 'show_log'])->name('show_log');
Route::get('/reg', [AuthController::class, 'show_reg'])->name('show_reg');
Route::post('/log/new', [AuthController::class, 'log'])->name('log');
Route::post('/reg/new', [AuthController::class, 'reg'])->name('reg');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/messeges', [MessegeController::class, 'messeges'])->name('messeges');
Route::get('/profile', [MessegeController::class, 'profile'])->name('profile');
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');