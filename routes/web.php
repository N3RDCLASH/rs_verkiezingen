<?php

use App\Http\Controllers\KandidatenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PartijenController;

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



Route::get('/login', [PagesController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register');




Route::get('/home', [PagesController::class, 'home']);

Route::get('/stemmen', [PagesController::class, 'stemmen']);

Route::resource('partijen', PartijenController::class);

Route::get('/districten', [PagesController::class, 'districten']);

Route::resource('kandidaten', KandidatenController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
