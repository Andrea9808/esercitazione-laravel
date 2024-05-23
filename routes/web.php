<?php

use Illuminate\Support\Facades\Route;

//IMPORT CONTROLLER
use App\Http\Controllers\BranchController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\HomeController;

//ROTTE PER LA HOME
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return redirect()->route('home');
});


//ROTTE PER GLI AUTOMEZZI

//index
Route::get('/vehicles', [VehicleController :: class, 'index'])
    ->name('Vehicle.vehicle');

//show
Route::get('/vehicles/{id}',[VehicleController::class, 'show'])
    ->name('vehicle.show');

//create
Route::get('/create/vehicles',[VehicleController::class, 'create'])
    ->name('vehicle.create');

//store
Route::post('/create/vehicles',[VehicleController::class, 'store'])
    ->name('vehicle.store');


//ROTTE PER LE FILIALI

//index
Route::get('/branches', [BranchController :: class, 'index'])
    ->name('Branch.branch');

//show
Route::get('/branches/{id}',[BranchController::class, 'show'])
->name('branch.show');

//create
Route::get('/create/branches',[BranchController::class, 'create'])
    ->name('branch.create');

//store
Route::post('/create/branches',[BranchController::class, 'store'])
    ->name('branch.store');

