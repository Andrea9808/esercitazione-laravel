<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//IMPORT AUTOMEZZI
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index(){
        $vehicles = Vehicle :: all();
        return view('pages.Vehicle.vehicle', compact('vehicles'));
    }
}
