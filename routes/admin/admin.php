<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AboutpageController;
use App\Http\Controllers\TermspageController;
use App\Http\Controllers\ReviewpageController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactpageController;
use App\Http\Controllers\PrivacypageController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ResidencyController;
use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\Admin\WorkPermitController;
use App\Http\Controllers\Admin\CitizenshipController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\Admin\ConfigurationUpdateController;
use App\Http\Controllers\TeamController;

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

    Route::get("/admin/category", [CategoryController::class, "viewcategory"])->name("admin.category");
    Route::delete("/admin/category/delete{id}", [CategoryController::class, "deletecategory"])->name("admin.category.delete");
    Route::post("/admin/category/add", [CategoryController::class, "createcategory"])->name("admin.category.add");

    //Countries
    Route::get("/admin/countries", [CountryController::class, "countries"])->name("admin.countries");
    Route::post("/admin/countries/add", [CountryController::class, "createCountry"])->name("admin.countries.add");
    Route::delete("/admin/countries/delete/{id}", [CountryController::class, "deleteCountry"])->name("admin.countries.delete");

    //Teams 
    Route::get("/admin/teams", [TeamController::class, "teams"])->name("admin.teams");
    Route::post("/admin/teams/add", [TeamController::class, "createTeam"])->name("admin.teams.add");
    Route::delete("/admin/teams/delete/{id}", [TeamController::class, "deleteTeam"])->name("admin.teams.delete");
    

    // Case Studies
    Route::prefix("/admin/certificates")->group(function () {
        Route::get("/", [CertificateController::class, "certificates"])->name("admin.certificates");
        Route::post("/new", [CertificateController::class, "newCertificate"])->name("admin.certificate.add");
        Route::delete("/delete/{id}", [CertificateController::class, "deleteCertificate"])->name("admin.certificate.delete");
    });

    Route::prefix("/admin/study")->group(function () {
        Route::get("/case-studies", [StudyController::class, "caseStudy"])->name("admin.study.caseStudy");
        Route::get("/new", [StudyController::class, "newStudy"])->name("admin.new.study");

    });

    // citizenship
    Route::prefix("/admin/citizenship")->group(function () {
        Route::get("/all", [CitizenshipController::class, "citizenship"])->name("admin.country.citizenship");
        Route::get("/new", [CitizenshipController::class, "newCitizen"])->name("admin.new.citizenship");
    });

    // Residency
    Route::prefix("/admin/residency")->group(function () {
        Route::get("/all-residency", [ResidencyController::class, "allResidency"])->name("admin.residency.allResidency");
        Route::get("/new", [ResidencyController::class, "newResidency"])->name("admin.new.Residency");
    });

    // work permit
    Route::prefix("/admin/work-permit")->group(function () {
        Route::get("/previous", [WorkPermitController::class, "previousPermit"])->name("admin.permit.previous");
        Route::get("/new", [WorkPermitController::class, "newWorkPermit"])->name("admin.permit.new");
    });
    // notification
    Route::prefix("/admin")->group(function () {
        Route::get("/notification", [NotificationController::class, "notification"])->name("admin.notification");
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
    
    Route::prefix("/admin/settings/update")->name("admin.settings.update.")->group(function(){
        Route::post("/banner", [HomepageController::class, 'updateBanner'])->name("banner");
        Route::post("/consulting", [HomepageController::class, 'updateConsulting'])->name("consulting");
        Route::post("/our-support", [HomepageController::class, 'updateOurSupport'])->name("our.support");
        Route::post("/coaching-and-training", [HomepageController::class, 'updateCoachingAndTraining'])->name("coaching.training");
        Route::post("/testimonials", [HomepageController::class, 'updateTestimonials'])->name("testimonials");
        Route::post("/countries-list", [HomepageController::class, 'updateCountriesList'])->name("countries.list");
        Route::post("/our-consultants", [HomepageController::class, 'updateOurConsultants'])->name("our.consultants");
        Route::post("/contact", [HomepageController::class, 'updateContact'])->name("contact");
        // About Configuration
        Route::post("/about-banner", [AboutpageController::class, 'updateAboutBanneer'])->name("about.banner");
        Route::post("/experience", [AboutpageController::class, 'updateExperience'])->name("experience");
        Route::post("/about-us", [AboutpageController::class, 'updateAboutUs'])->name("about.us");
        // Contact Configuration
        Route::post("/contact", [ContactpageController::class, 'updateContact'])->name("contact");
        Route::post("/checkout-location", [ContactpageController::class, 'updateLocation'])->name("checkout.location");
        // Terms  and Conditions configuration
        Route::post("/terms-condition", [TermspageController::class, 'updateTermsBanner'])->name("terms.banner");
        Route::post("/terms-condition-content", [TermspageController::class, 'updateTermsContent'])->name("terms.content");
        // Privacy Policy  configuration
        Route::post("/privacy-policy-banner", [PrivacypageController::class, 'updatePolicyBanner'])->name("policy.banner");
        Route::post("/privacy-policy-content", [PrivacypageController::class, 'updatePolicyContent'])->name("privacy.policy");
        // Write a review
        Route::post("/review-banner", [ReviewpageController::class, 'updateReviewBanner'])->name("review.banner");
        Route::post("/review-content", [ReviewpageController::class, 'updateReviewContent'])->name("write.review");
    });
});
