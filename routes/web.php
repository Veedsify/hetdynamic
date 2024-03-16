<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CoachingController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ResidencyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

//Admin Routes
require_once  __DIR__ . '/admin/admin.php';

//  Pass settings to all views
View::composer('*', function ($view) {
    $settings = \App\Models\GlobalSetting::query()->first();
    $view->with('pagedata', $settings);
});

Route::get('/', [IndexController::class, 'showIndexPage'])->name("home");

//Pages
Route::get("/about", [AboutController::class, 'showAboutPage'])->name("about");


Route::get("/login", [AuthController::class, 'showLoginPage'])->name("login");
Route::get("/register", [AuthController::class, 'showRegisterPage'])->name("register");
Route::post("/register/new", [AuthController::class, 'register'])->name("register.new");
Route::get("/validate/email/{token}", [AuthController::class, 'validateEmail'])->name("validate.email");
Route::post("/login/submit", [AuthController::class, 'login'])->name("login.submit");
Route::get("/logout", [AuthController::class, 'logout'])->name("logout");

Route::prefix('contact')->group(function () {
    Route::get("/", [ContactController::class, 'showContactPage'])->name("contact");
    Route::post("/new", [ContactController::class, 'submitContactForm'])->name("contact.submit");
});

//Residency
Route::get("/residency/{pageId}", [ResidencyController::class, 'showResidencyPagesDetails'])->name("residency.details");


//Blog
Route::get("/blog", [BlogController::class, 'showBlogPage'])->name("blog");
Route::get("/blog/{postId}", [BlogController::class, 'showBlogPagesDetails'])->name("blog.details");
Route::post('/blog/block/', [BlogController::class, 'getBlogDetailsBlock'])->name("blog.block");
Route::post("/comment/{id}/comment", [CommentController::class, 'newComments'])->name("comment.new");

//Faq
Route::get("/faq", [PagesController::class, 'showFaqPage'])->name("faq");

//Coaching
Route::get("/coaching", [CoachingController::class, 'showCoachingPage'])->name("coaching");
Route::get("/coaching/{pageId}", [CoachingController::class, 'showCoachingPagesDetails'])->name("coaching.details");

