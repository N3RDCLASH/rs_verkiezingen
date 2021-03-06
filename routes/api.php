<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatistiekenController;
use App\Http\Controllers\StemmenController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('statistieken/kandidaten/district/{district_id}', [StatistiekenController::class, 'getStemmenKandidaatPerDistrict']);
Route::get('statistieken/partijen', [StatistiekenController::class, 'getPartijStemmenTotaal']);
Route::put('stemmen/{kandidaat_id}', [StemmenController::class, 'update']);
