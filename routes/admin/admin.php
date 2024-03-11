<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\BlogController;

// Admin Route Web Endpoints

// Route::middleware(['auth', 'admin'])->group(function () {

    Route::get("/admin", [AdminPagesController::class, "admin"])->name("admin");
    // Contact
    Route::prefix("admin/contact")->group(function () {
        Route::get("/", [ContactController::class, "contact"])->name("admin.contact");
        Route::get("/chat", [ContactController::class, "chat"])->name("admin.chat");
        Route::get("/call", [ContactController::class, "contact"])->name("admin.call");
        Route::get("/chat/{chatId}", [ContactController::class, "chat"])->name("admin.chat.unique");
        Route::get("/call/{callId}", [ContactController::class, "call"])->name("admin.call.unique");
    });

    // email
    Route::prefix("admin/email")->group(function () {
        Route::get("/", [EmailController::class, "email"])->name("admin.email");
        Route::get("/support", [EmailController::class, "support"])->name("admin.support");
        // Route::get("/compose", [EmailController::class, "compose"])->name("admin.email.compose");
        // Route::get("/sent", [EmailController::class, "sent"])->name("admin.email.sent");
        // Route::get("/draft", [EmailController::class, "draft"])->name("admin.email.draft");
        // Route::get("/trash", [EmailController::class, "trash"])->name("admin.email.trash");
        // Route::get("/inbox", [EmailController::class, "inbox"])->name("admin.email.inbox");
        // Route::get("/sent/{emailId}", [EmailController::class, "sent"])->name("admin.email.sent.unique");
        // Route::get("/draft/{emailId}", [EmailController::class, "draft"])->name("admin.email.draft.unique");
        // Route::get("/trash/{emailId}", [EmailController::class, "trash"])->name("admin.email.trash.unique");
        // Route::get("/inbox/{emailId}", [EmailController::class, "inbox"])->name("admin.email.inbox.unique");
    });

    Route::prefix("/admin/blog")->group(function () {
        Route::get("/", [BlogController::class, "blog"])->name("admin.blog");
        Route::get("/create", [BlogController::class, "createBlog"])->name("admin.blog.create");
        Route::get("/edit/{blogId}", [BlogController::class, "editBlog"])->name("admin.blog.edit");
        Route::get("/delete/{blogId}", [BlogController::class, "deleteBlog"])->name("admin.blog.delete");
        Route::get("/view/{blogId}", [BlogController::class, "viewBlog"])->name("admin.blog.view");
        Route::get("/article", [BlogController::class, "articleBlog"])->name("admin.blog.article");
        Route::get("/comment", [BlogController::class, "articleComment"])->name("admin.blog.comment");
    });
// });
