<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// IMPORT CONTROLLERS
use App\Http\Controllers\Api\BranchController;
use App\Http\Controllers\Api\VehicleController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// ROUTES API
Route::group(['prefix'=>'Filiale'], function(){
    Route::get('/', [BranchController::class, 'getBranches']);
});


Route::group(['prefix'=>'Automezzi'], function(){
    Route::get('/', [VehicleController::class, 'getVehicles']);
});
