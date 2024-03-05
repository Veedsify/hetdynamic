<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class ContactController extends Controller
{
    //
    public function contact() {
        return View::make("admin.contact");
    }
    public function chat($chatId) {
        return View::make("admin.chat");
    }
    public function call($callId) {
        return View::make("admin.call-application");
    }

}
