<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ResidencyController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\Admin\ConfigurationUpdateController;

// Admin Route Web Endpoints

Route::middleware(['auth', 'admin'])->group(function () {

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
        Route::get("/edit/{blogId}", [BlogController::class, "editBlog"])->name("admin.blog.edit");
        Route::put("/update/{slug}", [BlogController::class, "editarticle"])->name("admin.blog.update");
        Route::post("/create/new", [BlogController::class, "newarticle"])->name("blog.new.article");
        Route::delete("/delete/{blogSlug}", [BlogController::class, "deleteBlog"])->name("blog.delete");
        Route::delete("/comment/{commentId}", [BlogController::class, "deleteComment"])->name("admin.blog.comment.delete");
    });


    Route::prefix("/admin/study")->group(function () {
        Route::get("/case-studies", [StudyController::class, "caseStudy"])->name("admin.study.caseStudy");
    });


    Route::prefix("/admin/country")->group(function () {
        Route::get("/citizenship", [CountryController::class, "citizenship"])->name("admin.country.citizenship");
    });
    Route::prefix("/admin/residency")->group(function () {
        Route::get("/all-residency", [ResidencyController::class, "allResidency"])->name("admin.residency.allResidency");
    });
    Route::prefix("/admin/setting")->name("config.")->group(function () {
        //Configuration
        Route::get("/details", [ConfigurationController::class, 'showDetailsPage'])->name("details");
        Route::get("/banner", [ConfigurationController::class, 'showBannerPage'])->name("banner");
        Route::get("/consulting", [ConfigurationController::class, 'showConsultingPage'])->name("consulting");
        Route::get("/our-support", [ConfigurationController::class, 'showOurSupportPage'])->name("our.support");
        Route::get("/coaching-and-training", [ConfigurationController::class, 'showCoachingAndTrainingPage'])->name("coaching.training");
        Route::get("/testimonials", [ConfigurationController::class, 'showTestimonialsPage'])->name("testimonials");
        Route::get("/countries-list", [ConfigurationController::class, 'showCountriesListPage'])->name("countries.list");
        Route::get("/our-consultants", [ConfigurationController::class, 'showOurConsultantsPage'])->name("our.consultants");
        Route::get("/contact", [ConfigurationController::class, 'showContactPage'])->name("contact");
        // About Configuration
        Route::get("/about", [ConfigurationController::class, 'showAboutPage'])->name("about");
        Route::get("/experience", [ConfigurationController::class, 'showExperiencePage'])->name("experience");
        Route::get("/about-us", [ConfigurationController::class, 'showAboutUsPage'])->name("about.us");
        // Contact Configuration
        Route::get("/contact", [ConfigurationController::class, 'showContactPage'])->name("contact");
        Route::get("/checkout-location", [ConfigurationController::class, 'showLocationPage'])->name("checkout.location");
        // Terms  and Conditions configuration
        Route::get("/terms-condition", [ConfigurationController::class, 'showTermsBannerPage'])->name("terms.banner");
        Route::get("/terms-condition-content", [ConfigurationController::class, 'showTermsContentPage'])->name("terms.content");
        // Privacy Policy  configuration
        Route::get("/privacy-policy-banner", [ConfigurationController::class, 'showPolicyBannerPage'])->name("policy.banner");
        Route::get("/privacy-policy-content", [ConfigurationController::class, 'showPolicyContentPage'])->name("privacy.policy");

        // Write a review
        Route::get("/review-banner", [ConfigurationController::class, 'showReviewBannerPage'])->name("review.banner");
        Route::get("/review-content", [ConfigurationController::class, 'showReviewContentPage'])->name("write.review");

        // Profile
        Route::get("/profile", [ConfigurationController::class, 'showProfilePage'])->name("profile");



        // Configuration Post Updates
        Route::post("/update/details", [ConfigurationUpdateController::class, 'updateDetailsPage'])->name("details.update");
    });
});
