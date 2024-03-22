<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutpageBanner;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class AboutController extends Controller
{
    //
    public function showAboutPage()
    {
        $aboutBanners  = AboutpageBanner::first();
        return View::make('pages.about',[
            "aboutBanners" => $aboutBanners 

        ]);
    }
}
