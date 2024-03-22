<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutpageBanner;
use App\Http\Controllers\Controller;

class AboutpageController extends Controller
{
    //
    public function updateAboutBanneer(Request $request)
    {
        $request->validate([
            'about_banner_title' => 'required',
        ]);
        if ($request->hasFile('about_banner_image')) {
            $about_banner_image = $request->file('about_banner_image');
            $about_banner_image_name = $about_banner_image->getClientOriginalName();
            $about_banner_image->move(public_path('custom/settings'), $about_banner_image_name);
            $filePath = 'custom/settings/' . $about_banner_image_name;
        }
        $about_banner = AboutpageBanner::first();
        $about_banner->about_banner_title= $request->about_banner_title;
        
        if ($request->hasFile('about_banner_image')) {
            $about_banner->about_banner_image = $filePath;
        }
        $about_banner->save();
        return redirect()->back()->with('success', 'About banner updated successfully');
    }
}
