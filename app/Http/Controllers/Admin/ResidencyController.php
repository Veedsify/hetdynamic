<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class ResidencyController extends Controller
{
    //
    public function allResidency()
    {
            return View::make("admin.all-residency");

    }
    public function newResidency()
    {
            return View::make("admin.new-residency");

    }

}
