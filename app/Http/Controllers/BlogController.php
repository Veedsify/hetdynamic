<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogComment;
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

    public function articleBlog()
    {
        $blogs = Blog::paginate(5);
        return view("admin.all-article", [
            "articles" => $blogs
        ]);
    }

    public function articleComment()
    {
        $comments = BlogComment::all()->sortByDesc("created_at");
        return view("admin.comment", [
            "comments" => $comments
        ]);
    }

    public function deleteComment($commentId)
    {
        try {
            $comment = BlogComment::find($commentId);
            $comment->delete();
            return redirect()->back()->with("success", "Comment Deleted Successfully");
        } catch (\Exception $e) {
            return redirect()->back()->with("error", "An Error Occurred");
        }
    }
}
