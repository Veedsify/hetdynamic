<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function showBlogPage(){
        return view("blog");
    }

    public function showBlogPagesDetails($postId){
        return view("blog-details", ["postId" => $postId]);
    }
}
