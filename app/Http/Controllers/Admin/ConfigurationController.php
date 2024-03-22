<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\HomepageBanner;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\HomepageConsulting;

class ConfigurationController extends Controller
{
    public function showDetailsPage()
    {
        return view("admin.homepage.details");
    }

public function showBannerPage()
    {
        $bannerDetails  = HomepageBanner::find(1)->first();
        return view("admin.homepage.banner", [
            'data' => $bannerDetails
        ]);
    }
    public function showConsultingPage()
    {
        $consultingData  = HomepageConsulting::find(1)->first();
        return view("admin.homepage.consulting",[
            'data' => $consultingData
        ]);
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
    // about
    public function showAboutPage()
    {
        return view("admin.aboutpage.about");
    }
    public function showExperiencePage()
    {
        return view("admin.aboutpage.years-of-experience");
    }
    public function showAboutUsPage()
    {
        return view("admin.aboutpage.about-us");
    }

    // Contact
    public function showContactPage()
    {
        return view("admin.contactpage.contact");
    }
    public function showLocationPage()
    {
        return view("admin.contactpage.checkout-location");
    }

    // Terms and Condition
    public function showTermsBannerPage()
    {
        return view("admin.termspage.terms-banner");
    }
    public function showTermsContentPage()
    {
        return view("admin.termspage.terms-condition-content");
    }
    // Privacy Policy
    public function showPolicyBannerPage()
    {
        return view("admin.privacypage.privacy-banner");
    }
    public function showPolicyContentPage()
    {
        return view("admin.privacypage.privacy-policy-content");
    }

    // Write a  Review
    public function showReviewBannerPage()
    {
        return view("admin.reviewpage.review-banner");
    }
    public function showReviewContentPage()
    {
        return view("admin.reviewpage.review-content");
    }

    // profile
    public function showProfilePage()
    {
        return view("admin.profile");
    }
}
