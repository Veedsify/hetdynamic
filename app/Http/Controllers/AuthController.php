<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\GlobalSetting;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class AuthController extends Controller
{
    //
    public function showLoginPage()
    {
        if (auth()->check()) {
            return redirect(route('admin'));
        }
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
            "remember_token" => Str::random(10),
            'avatar' => "/custom/placeholder.jpg"
        ]);

        $token = $user->email_verification_token;

        Notification::create([
            'type' => 'account',
            'title' => 'New User Registration',
            'description' =>  $user->fullname . ' has registered on ' . GlobalSetting::first()->site_name,
            'seen' => 'unread',
            'image' => "custom/notifications/user.svg",
            'url' => '',
        ]);

        $url = route('verify.email', $token);
        Mail::send(new WelcomeEmail($user, $url));

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

    public function verifyEmail($token)
    {
        
        $user = User::where("email_verification_token", $token)->first();
        $user->email_verified_at = now();
        $user->email_verified = true;
        $user->save();

        auth()->login($user, true);

        return redirect(route('login'))->with('success', 'Email Verified');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where("email", $request->email)->first();

        if (!$user) {
            return redirect(route('login'))->with('error', 'Invalid Email Address or Password!');
        }

        if (!Hash::check($request->password, $user->password)) {
            return redirect(route('login'))->with('error', 'Invalid Email Address or Password!');
        }

        if (!$user->email_verified_at) {
            return redirect(route('login'))->with('error', 'Email not verified');
        }

        auth()->login($user, true);

        return redirect(route('admin'));
    }

    public function logout()
    {
        auth()->logout();
        return redirect(route('login'));
    }
}
