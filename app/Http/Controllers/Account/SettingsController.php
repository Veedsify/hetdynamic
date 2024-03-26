<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class SettingsController extends Controller
{
    //
    public function setting(Request $request)
    {
            // Check if user is logged in and has the "user" role (optional)
            if (!Auth::check() || !Auth::user()->hasRole('user')) {
                abort(403, 'Unauthorized');
            }
            $user = User::findOrFail($id);

        return View::make("account.settings");


        // Check if user is logged in and has the "user" role (optional)
        if (!Auth::check() || !Auth::user()->hasRole('user')) {
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
        $request->session()->flash('success', 'User data updated successfully!');

        return redirect()->route('/ '); // Redirect to user list or desired location
    }
}
