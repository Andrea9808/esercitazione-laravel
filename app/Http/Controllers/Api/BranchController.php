<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

// IMPORT MODEL BRANCH
use App\Models\Branch;


class BranchController extends Controller
{

    //API GET BRANCHES
    public function getBranches()
    {
        $branches = Branch::with('vehicles')->get();

        return response()->json([
            'status' => 'success',
            'data' => $branches
        ]);
    }
}
