<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//IMPORT AUTOMEZZI
use App\Models\Vehicle;
use App\Models\Branch;

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

    //CREATE
    public function create(){

        $branches = Branch::all();
        $vehicles = Vehicle::all();
        return view('pages.Vehicle.create', compact('branches','vehicles'));
    }

    //STORE
    public function store(Request $request){
    $data = $request->all();

    $vehicle = new Vehicle();
    $vehicle->code = $data['code'];
    $vehicle->plate = $data['plate'];
    $vehicle->brand = $data['brand'];
    $vehicle->model = $data['model'];

    $branch = Branch::find($data['branch_id']);
    $vehicle->branch()->associate($branch);


    $vehicle->save();

    return redirect()->route('Vehicle.vehicle');
    }
}
