<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//IMPORT FILIALI
use App\Models\Branch;

class BranchController extends Controller
{
    public function index(){
        $branches = Branch :: all();
        return view('pages.Branch.branch', compact('branches'));
    }
}
