<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    public function user()
    {
        $users = User::where('id', '!=', auth()->user()->id)->get();
        return View::make('admin.users', ['users' => $users]);
    }

    public function upgradeUser(User $user, Request $request)
    {
        // Validate the request
        $request->validate([
            'role' => 'required|in:user,admin',
        ]);

        // Update the user's role
        $user->update(['role' => $request->role]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'User role updated successfully.');
    }

    public function deleteUser($id)
    {
        try {

            $user = User::find($id);
            $file = public_path($user->avatar);
            if (file_exists($file)) {
                unlink($file);
            }
            $user->delete();
            return redirect()->back()->with('success', 'user member deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

}
