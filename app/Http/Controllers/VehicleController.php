<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//IMPORT AUTOMEZZI
use App\Models\Vehicle;

class VehicleController extends Controller
{

    //INDEX
    public function index(){
        $vehicles = Vehicle :: all();
        return view('pages.Vehicle.vehicle', compact('vehicles'));
    }

     //SHOW
     public function show($id){
        $vehicles = Vehicle :: find($id);
        return view('pages.Vehicle.show', compact('vehicles'));
    }
}
