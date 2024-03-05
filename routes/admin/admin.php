<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AdminPagesController;


// Admin Route Web Endpoints
Route::get("/admin", [AdminPagesController::class, "admin"])->name("admin");

// contact

Route::get("/admin/contact", [ContactController::class, "contact"])->name("admin.contact");
Route::get("/admin/contact/{chatId}", [ContactController::class, "chat"])->name("admin.chat");
Route::get("/admin/contact/{callId}", [ContactController::class, "call"])->name("admin.call");

