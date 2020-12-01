<?php

use App\Http\Controllers\KandidatenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DistrictenController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\PartijenController;
use App\Http\Controllers\StemmenController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;

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

Route::redirect('/', '/login');

Route::resource('login', LoginController::class);

Route::get('logout', [LogoutController::class, 'store']);

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/home', [HomeController::class, 'index']);

Route::resource('admins', AdminsController::class);

Route::resource('partijen', PartijenController::class);

Route::resource('/districten', DistrictenController::class);

Route::resource('kandidaten', KandidatenController::class);

Route::resource('stemmen', StemmenController::class);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
