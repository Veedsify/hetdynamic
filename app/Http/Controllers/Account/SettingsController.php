<?php

namespace App\Http\Controllers\Account;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    //
    public function setting(Request $request)
    {
        // Check if user is logged in and has the "user" role (optional)
        if (!Auth::check() || !Auth::user()->role === 'user') {
            abort(403, 'Unauthorized');
        }
        $user = User::findOrFail(Auth::id());

        return View::make("account.settings");
    }


    public function update(Request $request, $id)
    {

        // Check if user is logged in and has the "user" role (optional)
        if (!Auth::check() || !Auth::user()->role === 'user') {
            abort(403, 'Unauthorized');
        }

        $user = User::findOrFail($id);

        $validatedData = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email,' . $user->id, // Exclude current user's email
        ]);

        if ($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData)->withInput();
        }

        // Update user data
        $user->update($validatedData->validated());

        // Update password if provided (optional)
        if ($request->has('password')) {
            $user->update([
                'password' => Hash::make($request->password)
            ]);
        }

        // Flash a success message (optional)
        $request->redirect()->back()->with('success', 'User data updated successfully!');

        return redirect()->route('/ '); // Redirect to user list or desired location
    }
}
