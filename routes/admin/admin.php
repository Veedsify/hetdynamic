<?php

use App\Http\Controllers\Admin\AdminPagesController;
use Illuminate\Support\Facades\Route;


// Admin Route Web Endpoints
Route::get("/admin", [AdminPagesController::class, "admin"])->name("admin");
