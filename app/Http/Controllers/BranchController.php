<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//IMPORT FILIALI
use App\Models\Branch;

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
}
