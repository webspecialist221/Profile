<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/activity', [App\Http\Controllers\ActivityController::class, 'index'])->name('activity');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/edit-profile/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit.profile');
Route::put('/edit-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('edit.passwrod');
Route::put('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('update.profile');
