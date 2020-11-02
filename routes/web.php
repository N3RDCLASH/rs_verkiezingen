<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/login',[PagesController::class,'login']);

Route::get('/register',[PagesController::class,'register']);

Route::get('/home',[PagesController::class,'home']);

Route::get('/stemmen',[PagesController::class,'stemmen']);

Route::get('/kandidaten',[PagesController::class,'kandidaten']);

Route::get('/partijen',[PagesController::class,'partijen']);

Route::get('/distrikten',[PagesController::class,'distrikten']);

