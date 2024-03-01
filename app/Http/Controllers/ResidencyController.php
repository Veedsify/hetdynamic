<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResidencyController extends Controller
{
    //
    public function showResidencyPagesDetails($pageId)
    {
        return view('residency-details', ['pageId' => $pageId]);
    }
}
