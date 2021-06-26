<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => 'apiprotected'], function()
{
    Route::post('/provinces', [\App\Http\Controllers\ProvinceController::class, 'index']);
    Route::post('/getProvince', [\App\Http\Controllers\ProvinceController::class, 'spesific']);
    Route::post('/cities', [\App\Http\Controllers\CityController::class, 'index']);
    Route::post('/getCity', [\App\Http\Controllers\CityController::class, 'spesific']);
    Route::post('/districts', [\App\Http\Controllers\DistrictController::class, 'index']);
    Route::post('/getDistrict', [\App\Http\Controllers\DistrictController::class, 'spesific']);
    Route::post('/villages', [\App\Http\Controllers\VillageController::class, 'index']);
    Route::post('/getVillage', [\App\Http\Controllers\VillageController::class, 'spesific']);
});

