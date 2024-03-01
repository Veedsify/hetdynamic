<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ResidencyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'showIndexPage'])->name("home");

Route::get("/about", [AboutController::class, 'showAboutPage'])->name("about");
Route::get("/contact", [ContactController::class, 'showContactPage'])->name("contact");
Route::get("/login", [AuthController::class, 'showLoginPage'])->name("login");

//Residency
Route::get("/residency/{pageId}", [ResidencyController::class, 'showResidencyPagesDetails'])->name("residency.details");


//Blog
Route::get("/blog", [BlogController::class, 'showBlogPage'])->name("blog");
Route::get("/blog/{postId}", [BlogController::class, 'showBlogPagesDetails'])->name("blog.details");
