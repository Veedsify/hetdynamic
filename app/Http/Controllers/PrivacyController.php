<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class PrivacyController extends Controller
{
    //
    public function showPrivacyPage()
    {
        return View::make('pages.privacy-policy');
    }
}
