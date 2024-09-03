<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function edit()
    {

        $user = Auth::user();


        return view('admin.general_settings.edit', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();


        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);


        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->withErrors(['old_password' => 'The old password does not match'])->withInput();
        }

        // Update the user's password only if new password and confirm password match
        if ($request->new_password === $request->new_password_confirmation) {
            $user->password = Hash::make($request->new_password);
            $user->save();
            return redirect()->back()->with('password', 'Password updated successfully.');
        } else {
            return redirect()->back()->withErrors(['new_password_confirmation' => 'New password and confirm password does not match'])->withInput();
        }
    }

    public function update_profile(Request $request)
    {


        $user = Auth::user();


        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'contact_no' => 'required|string|max:15',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $input = $request->only('name', 'email', 'contact_no');



        if($request->hasFile('profile_image')) {

            $profileImage = $request->file('profile_image');

            $profileImageName = time() . '.' . $profileImage->getClientOriginalExtension();


            $profileImage->storeAs('profile_images', $profileImageName, 'public');

            $input['profile_image'] = $profileImageName;

        }


        $user->update($input);



        return redirect()->back()->with('success', 'Profile updated successfully.');
    }


}
