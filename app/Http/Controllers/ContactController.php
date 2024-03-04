<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ContactController extends Controller
{
    //
    public function showContactPage()
    {
        return View::make('pages.contact');
    }
}
