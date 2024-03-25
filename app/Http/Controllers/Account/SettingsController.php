<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class SettingsController extends Controller
{
    //
    public function setting()
    {

        return View::make("account.settings");
    }
}
