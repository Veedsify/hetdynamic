<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Country;
use App\Models\HomepageBanner;
use App\Models\HomepageSupport;
use App\Models\HomepageConsulting;
use App\Http\Controllers\Controller;
use App\Models\AboutpageBanner;
use App\Models\HomepageCoaching;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    //P
    public function showIndexPage()
    {
        $blogs = Blog::query()->where("status", true)->orderBy("created_at", "desc")->limit(3)->get();
        $countries = Country::all();
        $bannerDetails  = HomepageBanner::first();
        $consultingData  = HomepageConsulting::find(1)->first();
        $supportData  = HomepageSupport::find(1)->first();
        $coachingData  = HomepageCoaching::find(1)->first();
        return View::make("pages.index", [
            "blogs" => $blogs,
            "countries" => $countries,
            "bannerDetails" => $bannerDetails,
            "consultingData" => $consultingData,
            "supportData" => $supportData,
            "coachingData" => $coachingData,


        ]);
    }
}
