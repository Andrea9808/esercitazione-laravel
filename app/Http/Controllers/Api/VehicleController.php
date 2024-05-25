<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// IMPORT MODEL VEHICLE
use App\Models\Vehicle;


class VehicleController extends Controller
{
    //API GET VEHICLES
    public function getVehicles()
    {
        $vehicles = Vehicle::with('branch')->get();

        return response()->json([
            'status' => 'success',
            'data' => $vehicles
        ]);
    }
}
