<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImmigrationServiceController extends Controller
{
    public function immigrationServices(Request $request)
    {
        dd($request->all());
    }
}
