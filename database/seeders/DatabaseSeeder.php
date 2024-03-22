<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Country;
use App\Models\GlobalSetting;
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
        // Country::factory(10)->create();
        Category::factory(10)->create();
        // Blog::factory(5)->create();
        GlobalSetting::factory(1)->create();
    }
}
