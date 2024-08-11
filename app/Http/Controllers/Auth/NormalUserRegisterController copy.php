<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\NormalUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;  // Add this use statement
use Illuminate\Validation\Rules; // Add this use statement
use App\Providers\RouteServiceProvider; // Add this use statement

class NormalUserRegisterController extends Controller
{
    // Display the registration form for normal users
    public function create()
    {
        return view('auth.normal-user-register');
    }

    // Handle the registration request and store the new user
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:normal_users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'nationality' => ['required', 'string', 'max:100'],
        ]);

        // Create a new NormalUser record in the database
        $user = NormalUser::create([
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password before storing it
            'nationality' => $request->nationality,
        ]);

        // Log the user in using the 'normal_user' guard
        Auth::guard('normal_user')->login($user);

        // Redirect the user to the home page after successful registration
        return redirect(RouteServiceProvider::HOME);
    }
}
