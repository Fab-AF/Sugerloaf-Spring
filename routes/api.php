<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CMSController;
use App\Http\Controllers\Api\StoreController;

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

Route::group(["prefix" => "v1"], function () {
	Route::middleware('secure_api')->group(function () {
		
		/*Route::prefix('cms')->group(function() {
			Route::get('/list', [CMSController::class, 'getCmsList']);
			Route::post('/details', [CMSController::class, 'getDetails']);
		});

		Route::prefix('store')->group(function() {
			Route::get('/list', [StoreController::class, 'getStoreList']);
		});*/

	});
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
