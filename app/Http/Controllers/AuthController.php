<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class AuthController extends Controller
{
    //
    public function showLoginPage()
    {
        return view('admin.login');
    }

    public function showRegisterPage()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $findUser = User::where("email", $request->input("email"));

        if ($findUser->exists()) {
            return redirect(route('register'))->with('error', 'User already exists');
        }

        $user = User::create([
            'fullname' => $request->name,
            'email' => $request->email,
            'user_id' => 'user_' . Str::random(10),
            'password' => Hash::make($request->password),
            'email_verification_token' => Str::random(64),
            'email_verified' => false,
            'avatar' => asset('assets/images/profile.webp')
        ]);

        $token = $user->email_verification_token;

        return redirect(route('validate.email', $token));
    }

    public function validateEmail($token)
    {
        $user = User::where("email_verification_token", $token)->first();

        if (!$user) {
            return redirect(route('home'));
        }
        return View::make("admin.validateemail", [
            'email' => $user->email
        ]);
    }
}
