<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Country;
use App\Models\GlobalSetting;
use App\Models\HomepageBanner;
use App\Models\HomepageConsulting;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create();
        HomepageBanner::create([
            'banner_text_1' => 'Welcome to our website',
            'banner_text_2' => 'We are here to help you',
            'banner_text_3' => 'We are here to help you',
            'banner_image_1' => 'https://images.pexels.com/photos/1371360/pexels-photo-1371360.jpeg?auto=compress&w=900',
            'banner_image_2' => 'https://images.pexels.com/photos/2265876/pexels-photo-2265876.jpeg?auto=compress&w=900',
            'banner_image_3' => 'https://images.pexels.com/photos/2087391/pexels-photo-2087391.jpeg?auto=compress&w=900'
        ]);

        HomepageConsulting::create([
            'consulting_title' => 'Consulting Services',
            'consulting_description' => 'We provide the best consulting services',
            'consulting_feature_1' => 'Feature 1',
            'consulting_feature_2' => 'Feature 2',
            'consulting_desc_1' => 'Description 1',
            'consulting_desc_2' => 'Description 2',
            'consulting_image' => 'https://images.pexels.com/photos/2108845/pexels-photo-2108845.jpeg?auto=compress&cs=tinysrgb&w=600',
            'consulting_image_2' => 'https://images.pexels.com/photos/2070485/pexels-photo-2070485.jpeg?auto=compress&cs=tinysrgb&w=400'
        ]);
        Category::factory(10)->create();

        GlobalSetting::factory(1)->create();
    }
}
