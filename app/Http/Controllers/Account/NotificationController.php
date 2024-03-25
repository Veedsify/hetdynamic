<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class NotificationController extends Controller
{
    //
    public function notification()
    {

        return View::make("account.notification");
    }
}
