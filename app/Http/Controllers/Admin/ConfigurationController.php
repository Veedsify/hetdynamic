<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    public function showDetailsPage()
    {
        return view("admin.homepage.details");
    }
    
    public function showBannerPage()
    {
        return view("admin.homepage.banner");
    }
    public function showConsultingPage()
    {
        return view("admin.homepage.consulting");
    }
    public function showOurSupportPage()
    {
        return view("admin.homepage.our-support");
    }
    public function showCoachingAndTrainingPage()
    {
        return view("admin.homepage.coaching-and-training");
    }
    public function showOurConsultantsPage()
    {
        return view("admin.homepage.our-consultants");
    }

}
