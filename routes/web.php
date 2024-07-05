<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RockbandController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\RockbandAwardController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class)->except('index','create','store');

//routes view users
Route::resource('/rockbands', RockbandController::class)->except('edit','create','store');

Route::delete('user/delete',  [App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');

//routes dashboard with admin
Route::get('dashboard/index', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin.index');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::resource('/dashboard/rockbands', RockbandController::class);
Route::resource('/dashboard/awards', AwardController::class);
Route::resource('/dashboard/votes', VoteController::class);
Route::resource('/dashboard/rockbandsawards', RockbandAwardController::class);