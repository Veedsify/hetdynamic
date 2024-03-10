<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\GlobalSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    //
    public function showIndexPage()
    {
        $blogs = Blog::query()->where("status", true)->orderBy("created_at", "desc")->limit(3)->get();
        return View::make("pages.index", [
            "blogs" => $blogs
        ]);
    }
}
