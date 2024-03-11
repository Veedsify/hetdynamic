<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function showBlogPage(Request $request)
    {
        $query = $request->get('page');
        $blogs = Blog::orderByDesc("created_at")->paginate(9);
        return view("pages.blog", [
            "blogs" => $blogs,
            'query' => $query
        ]);
    }

    public function showBlogPagesDetails($postId)
    {
        $article = Blog::where("slug", $postId)->first();
        $comments = $article->comments;
        $comments = $comments->sortByDesc("created_at");
        $paginateComments = $comments->forPage(1, 2);
        $relatedArticles = Blog::where("category", $article->category)->where("id", "!=", $article->id)->limit(3)->get();
        return view("pages.blog-details", [
            "article" => $article,
            "comments" => $paginateComments,
            "relatedArticles" => $relatedArticles
        ]);
    }

    public function createBlog()
    {
        return view("admin.new-article");
    }
    public function articleBlog()
    {
        $blogs = Blog::paginate(5);
        return view("admin.all-article", [
            "articles" => $blogs
        ]);
    }
    public function articleComment()
    {
        return view("admin.all-article");
    }
}
