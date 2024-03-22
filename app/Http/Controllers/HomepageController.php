<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomepageBanner;
use App\Models\HomepageConsulting;
use Illuminate\Support\Facades\Log;

class HomepageController extends Controller
{
    public function updateBanner(Request $request)
    {

        try {

            $request->validate([
                'banner_text_1' => 'required',
                'banner_text_2' => 'required',
                'banner_text_3' => 'required',
            ]);

            if ($request->hasFile('banner_image_1')) {
                $banner_image_1 = $request->file('banner_image_1');
                $banner_image_1_name = $banner_image_1->getClientOriginalName();
                $banner_image_1->move(public_path('custom/settings'), $banner_image_1_name);
                $filePath1 = 'custom/settings/' . $banner_image_1_name;
            }
            if ($request->hasFile('banner_image_2')) {
                $banner_image_2 = $request->file('banner_image_2');
                $banner_image_2_name = $banner_image_2->getClientOriginalName();
                $banner_image_2->move(public_path('custom/settings'), $banner_image_2_name);
                $filePath2 = 'custom/settings/' . $banner_image_2_name;
            }
            if ($request->hasFile('banner_image_3')) {
                $banner_image_3 = $request->file('banner_image_3');
                $banner_image_3_name = $banner_image_3->getClientOriginalName();
                $banner_image_3->move(public_path('custom/settings'), $banner_image_3_name);
                $filePath3 = 'custom/settings/' . $banner_image_3_name;
            }

            $homepageBanner = HomepageBanner::first();
            $homepageBanner->banner_text_1 = $request->banner_text_1;
            $homepageBanner->banner_text_2 = $request->banner_text_2;
            $homepageBanner->banner_text_3 = $request->banner_text_3;
            if ($request->hasFile('banner_image_1')) {
                $homepageBanner->banner_image_1 = $filePath1;
            }
            if ($request->hasFile('banner_image_2')) {
                $homepageBanner->banner_image_2 = $filePath2;
            }
            if ($request->hasFile('banner_image_3')) {
                $homepageBanner->banner_image_3 = $filePath3;
            }
            $homepageBanner->save();

            return redirect()->back()->with('success', 'Homepage banner updated successfully');
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while updating the home page banner');
        }
    }

    public function updateConsulting(Request $request)
    {
       $request->validate([
            'consulting_title' => 'required',
            'consulting_description' => 'required',
            'consulting_feature_1' => 'required',
            'consulting_feature_2' => 'required',
            'consulting_desc_1' => 'required',
            'consulting_desc_2' => 'required',
        ]);

        if ($request->hasFile('consulting_image')) {
            $consulting_image = $request->file('consulting_image');
            $consulting_image_name = $consulting_image->getClientOriginalName();
            $consulting_image->move(public_path('custom/settings'), $consulting_image_name);
            $filePath = 'custom/settings/' . $consulting_image_name;
        }
        if ($request->hasFile('consulting_image_2')) {
            $consulting_image_2 = $request->file('consulting_image_2');
            $consulting_image_2_name = $consulting_image_2->getClientOriginalName();
            $consulting_image_2->move(public_path('custom/settings'), $consulting_image_2_name);
            $filePath2 = 'custom/settings/' . $consulting_image_2_name;
        }

        $homepageConsulting = HomepageConsulting::first();
        $homepageConsulting->consulting_title = $request->consulting_title;
        $homepageConsulting->consulting_description = $request->consulting_description;
        $homepageConsulting->consulting_feature_1 = $request->consulting_feature_1;
        $homepageConsulting->consulting_feature_2 = $request->consulting_feature_2;
        $homepageConsulting->consulting_desc_1 = $request->consulting_desc_1;
        $homepageConsulting->consulting_desc_2 = $request->consulting_desc_2;
        if ($request->hasFile('consulting_image')) {
            $homepageConsulting->consulting_image = $filePath;
        }
        if ($request->hasFile('consulting_image_2')) {
            $homepageConsulting->consulting_image_2 = $filePath2;
        }
        $homepageConsulting->save();

        return redirect()->back()->with('success', 'Homepage consulting updated successfully');
    }
}
