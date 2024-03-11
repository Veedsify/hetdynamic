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
        if(!$article){
            return abort(404);
        }
        $comments = $article->comments;
        $comments = $comments->sortByDesc("created_at");
        $paginateComments = $comments->forPage(1, 2);
        $relatedArticles = Blog::where("category", $article->category)->where("id", "!=", $article->id)->limit(3)->get();
        $categories = Category::all();
        return view("pages.blog-details", [
            "article" => $article,
            "comments" => $paginateComments,
            "relatedArticles" => $relatedArticles,
            "categories" => $categories
        ]);
    }

    public function createBlog()
    {
        return view("admin.new-article");
    }
}
