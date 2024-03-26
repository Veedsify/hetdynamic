<?php

namespace App\Http\Controllers\Account;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class SettingsController extends Controller
{
    //
    public function setting()
    {
        $user = auth()->user();

        return View::make("account.settings");
    }
    public function updateProfile(Request $request)
{
    // $user = User::find(auth()->user()->id); // Retrieve the authenticated user

    // Validate the form data
    $request->validate([
        'fullname' => 'required',
        'phone' => 'required',
        'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        // 'avatar' => 'required',
        // Add validation rules for other fields

    ]);

    if ($request->hasFile('avatar')) {
        $avatar = $request->file('avatar');
        $avatar_name = $avatar->getClientOriginalName();
        $avatar->move(public_path('custom/user'), $avatar_name);
        $filePath = 'custom/user/' . $avatar_name;
    }


    User::where('id' , '=', auth()->user()->id)->update([



        'fullname' => $request->input('fullname'),
        'phone' => $request->input('phone'),
        'avatar' => isset( $filePath) ?   $filePath : User::find(auth()->user()->id)->avatar

    ]);


    // Update user data

    // Update other fields as needed

    // Save the changes

    // Redirect back with a success message
    return redirect()->route('account.setting')->with('success', 'Profile updated successfully.');
}

}
