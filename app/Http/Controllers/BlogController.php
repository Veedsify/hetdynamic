<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

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
        if (!$article) {
            return abort(404, "Article Not Found");
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

    public function articleBlog()
    {
        $blogs = Blog::paginate(5)->sortByDesc("created_at");
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

    public function newarticle(Request $request)
    {
        $request->validate([
            "title" => "required",
            "category" => "required",
            "html" => "required",
            "description" => "required",
            "file" => "required|image|mimes:jpeg,png,jpg,gif,svg",
        ]);

        $file = $request->file("file");
        $fileName = time() . "." . $file->getClientOriginalExtension();
        $file->move(public_path("custom/blog"), $fileName);
        $filepath = asset("custom/blog/" . $fileName);

        $checkSlug = Blog::where("slug", Str::slug($request->get("title")))->first();

        if ($checkSlug) {
            $newSlug = Str::slug($request->get("title")) . "-" . rand(1, 100);
        }

        //New Blog
        $article = new Blog();
        $article->title = $request->get("title");
        $article->category = Category::where("name", $request->get("category"))->first()->id;
        $article->description = $request->get("description");
        $article->slug = $newSlug;
        $article->content = $request->html;
        $article->content_html = $request->html;
        $article->tags = $request->get("tags");
        $article->user_id = 1;
        $article->status = true;
        $article->image = $filepath;
        $article->meta_title = $request->get("title");
        $article->meta_description = $request->get("description");
        $article->meta_keywords = $request->get("tags");

        if ($article->save()) {
            Log::info("Article Created Successfully");
            return response()->json([
                "status" => "success",
                "message" => "Article Created Successfully"
            ]);
        } else {
            Log::error("An Error Occurred");
        }
    }

    public function getBlogDetailsBlock(Request $request)
    {
        $slug = $request->slug;
        $blog = Blog::where("slug", $slug)->first();
        return response()->json([
            "blocks" => $blog->content
        ]);
    }
}
