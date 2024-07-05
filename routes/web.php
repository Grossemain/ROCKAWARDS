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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
// Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::resource('users', UserController::class)->except('index','create','store');
Route::delete('user/delete',  [App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');

//routes view users
Route::resource('/rockbands', RockbandController::class)->except('edit','create','store');
Route::resource('/awards', AwardController::class)->except('edit','create','store');
Route::get('/resultat', [App\Http\Controllers\ResultatController::class, 'index'])->name('resultat.index');
Route::resource('/votes', VoteController::class)->except('edit',);


//routes dashboard with admin
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin.index');


Route::resource('/dashboard/rockbands', RockbandController::class);
Route::resource('/dashboard/awards', AwardController::class);

Route::resource('/dashboard/rockbandsawards', RockbandAwardController::class);


