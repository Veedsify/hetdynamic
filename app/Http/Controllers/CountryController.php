<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    //
    public function citizenship()
    {
        return view("admin.all-citizenship");
    }
}
