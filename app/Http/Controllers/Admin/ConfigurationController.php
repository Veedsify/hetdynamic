<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AboutpageAbout;
use App\Models\HomepageBanner;
use App\Models\AboutpageBanner;
use App\Models\HomepageSupport;
use App\Models\TermspageBanner;
use App\Models\HomepageCoaching;
use App\Models\ReviewpageBanner;
use App\Models\TermspageContent;
use App\Models\ContactpageBanner;
use App\Models\PrivacypageBanner;
use App\Models\ReviewpageContent;
use App\Models\HomepageConsulting;
use App\Models\PrivacypageContent;
use App\Models\AboutpageExperience;
use App\Models\ContactpageLocation;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Office;

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
        return view("admin.homepage.consulting", [
            'data' => $consultingData
        ]);
    }
    public function showOurSupportPage()
    {
        $supportData  = HomepageSupport::find(1)->first();
        return view("admin.homepage.our-support", [
            'data' => $supportData
        ]);
    }
    public function showCoachingAndTrainingPage()
    {
        $coachingData  = HomepageCoaching::find(1)->first();
        return view("admin.homepage.coaching-and-training", [
            'data' => $coachingData
        ]);
    }
    public function showOurConsultantsPage()
    {
        return view("admin.homepage.our-consultants");
    }
    // about
    public function showAboutPage()
    {
        $aboutBannerData  = AboutpageBanner::find(1)->first();
        return view("admin.aboutpage.about", [
            'data' => $aboutBannerData
        ]);
    }
    public function showExperiencePage()
    {
        $aboutExperienceData = AboutpageExperience::find(1)->first();
        return view("admin.aboutpage.years-of-experience", [
            'data' => $aboutExperienceData
        ]);
    }
    public function showAboutUsPage()
    {
        $aboutusData = AboutpageAbout::find(1)->first();

        return view("admin.aboutpage.about-us", [
            "data" => $aboutusData
        ]);
    }

    // Contact
    public function showContactPage()
    {
        $contactData = ContactpageBanner::find(1)->first();
        return view("admin.contactpage.contact", [
            "data" => $contactData
        ]);
    }
    public function showLocationPage()
    {
        $locationData = ContactpageLocation::find(1)->first();
        return view("admin.contactpage.checkout-location", [
            "data" => $locationData

        ]);
    }

    // Terms and Condition
    public function showTermsBannerPage()
    {
        $termsData = TermspageBanner::find(1)->first();
        return view("admin.termspage.terms-banner", [
            "data" => $termsData
        ]);
    }
    public function showTermsContentPage()
    {
        $contentData = TermspageContent::find(1)->first();
        return view("admin.termspage.terms-condition-content", [
            "data" => $contentData
        ]);
    }
    // Privacy Policy
    public function showPolicyBannerPage()
    {
        $privacyData = PrivacypageBanner::find(1)->first();
        return view("admin.privacypage.privacy-banner", [
            'data' => $privacyData
        ]);
    }
    public function showPolicyContentPage()
    {
        $policyData = PrivacypageContent::find(1)->first();
        return view("admin.privacypage.privacy-policy-content", [
            'data' => $policyData
        ]);
    }

    // Write a  Review
    public function showReviewBannerPage()
    {
        $reviewData = ReviewpageBanner::find(1)->first();
        return view("admin.reviewpage.review-banner", [
            'data' => $reviewData
        ]);
    }
    public function showReviewContentPage()
    {
        $reviewContentData =  ReviewpageContent::find(1)->first();
        return view("admin.reviewpage.review-content", [
            'data' => $reviewContentData
        ]);
    }

    // profile
    public function showProfilePage()
    {
        $blogs = Blog::with('user')->with('comments')->get();
        return view("admin.profile", [
            "blogs" => $blogs,
            'addresses' => Office::all()->count()
        ]);
    }
}
