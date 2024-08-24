<?php

namespace App\Http\Controllers\ApplicantAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Check if the current password is correct for the applicant
        if (!Hash::check($request->current_password, $request->user('applicant')->password)) {
            return back()->withErrors(['current_password' => 'The provided password does not match our records.']);
        }

        $request->user('applicant')->update([
            'password' => Hash::make($request->password),
        ]);

        return back()->with('status', 'Password updated successfully!');
    }
}
