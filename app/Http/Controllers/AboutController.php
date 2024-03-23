<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutpageAbout;
use App\Models\AboutpageBanner;
use App\Models\AboutpageExperience;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class AboutController extends Controller
{
    //
    public function showAboutPage()
    {
        $aboutBanners  = AboutpageBanner::first();
        $aboutExperience  = AboutpageExperience::first();
        $aboutUs  = AboutpageAbout::first();

        return View::make('pages.about',[
            "aboutBanners" => $aboutBanners,
            "aboutExperience" => $aboutExperience,
            "aboutUs" => $aboutUs

        ]);

    }

}
