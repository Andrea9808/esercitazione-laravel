<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//IMPORT FILIALI
use App\Models\Branch;
use App\Models\Vehicle;

class BranchController extends Controller
{

    //INDEX
    public function index(){
        $branches = Branch :: all();
        return view('pages.Branch.branch', compact('branches'));
    }

    //SHOW
    public function show($id){
        $branches = Branch :: find($id);
        return view('pages.Branch.show', compact('branches'));
    }

    //CREATE
    public function create(){

        $branches = Branch::all();
        return view('pages.Branch.create', compact('branches'));
    }

    //STORE
    public function store(Request $request){
        $data = $request->all();

        $branch = new Branch();
        $branch->code = $data['code'];
        $branch->address = $data['address'];
        $branch->city = $data['city'];
        $branch->postalCode = $data['postalCode'];


        $branch->save();

        return redirect()->route('Branch.branch');
    }

}
