<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Country;
use App\Models\GlobalSetting;
use App\Models\HomepageBanner;
use App\Models\HomepageConsulting;
use Illuminate\Http\Request;
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
        return View::make("pages.index", [
            "blogs" => $blogs,
            "countries" => $countries,
            "bannerDetails" => $bannerDetails,
            "consultingData" => $consultingData
        ]);
    }
}
