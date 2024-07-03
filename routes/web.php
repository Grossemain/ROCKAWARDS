<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RockbandController;
use App\Http\Controllers\AwardController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class)->except('index','create','store');

//routes view users
Route::resource('/rockbands', RockbandController::class)->except('edit','create','store');

//routes dashboard with admin
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::resource('/dashboard/rockbands', RockbandController::class);
Route::resource('/dashboard/awards', AwardController::class);