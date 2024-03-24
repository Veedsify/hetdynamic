<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminPagesController extends Controller
{
    //
    public function admin()
    {

        return View::make("admin.index", [
            "users"  => User::where("role", "user")->orderByDesc("created_at")->get(),
        ]);
    }
}
