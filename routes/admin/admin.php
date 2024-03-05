<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AdminPagesController;


// Admin Route Web Endpoints
Route::get("/admin", [AdminPagesController::class, "admin"])->name("admin");


// Contact
Route::prefix("admin/contact")->group(function () {
    Route::get("/", [ContactController::class, "contact"])->name("admin.contact");
    Route::get("/chat", [ContactController::class, "chat"])->name("admin.chat");
    Route::get("/call", [ContactController::class, "contact"])->name("admin.call");
    Route::get("/chat/{chatId}", [ContactController::class, "chat"])->name("admin.chat.unique");
    Route::get("/call/{callId}", [ContactController::class, "call"])->name("admin.call.unique");
});


Route::prefix("admin/email")->group(function(){
    
})