<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class TermsController extends Controller
{
    //
    public function showTermsPage()
    {
        return View::make('pages.terms');
    }
}