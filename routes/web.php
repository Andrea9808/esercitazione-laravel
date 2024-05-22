<?php

use Illuminate\Support\Facades\Route;

//IMPORT CONTROLLER
use App\Http\Controllers\BranchController;
use App\Http\Controllers\VehicleController;

Route::get('/', function () {

    return view('pages.home');
});


//ROTTE PER GLI AUTOMEZZI
Route::get('/vehicles', [VehicleController :: class, 'index'])
    ->name('Vehicle.vehicle');



//ROTTE PER LE FILIALI
Route::get('/branches', [BranchController :: class, 'index'])
    ->name('Branch.branch');
