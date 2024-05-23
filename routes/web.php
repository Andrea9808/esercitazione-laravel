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




//ROTTE PER LE FILIALI

//index
Route::get('/branches', [BranchController :: class, 'index'])
    ->name('Branch.branch');

//show
Route::get('/branches/{id}',[BranchController::class, 'show'])
->name('branch.show');
