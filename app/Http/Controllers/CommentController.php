<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function newComments(Request $request, $id)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "message" => "required"
        ]);
        
        $article = Blog::where("slug", $id)->first();
        $article->comments()->create([
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "comment" => $request->input("message")
        ]);
        return redirect()->back()->with("message", "Comment added successfully");
    }
}
