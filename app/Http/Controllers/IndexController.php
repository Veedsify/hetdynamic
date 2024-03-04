<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    //
    public function showIndexPage()
    {
        return View::make("pages.index");
    }
}
