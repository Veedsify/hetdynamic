<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function showBlogPage()
    {
        return view("pages.blog");
    }

    public function showBlogPagesDetails($postId)
    {
        return view("pages.blog-details", ["postId" => $postId]);
    }
}
