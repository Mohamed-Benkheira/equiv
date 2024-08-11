<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NormalUserLoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $userGuard = Auth::guard('normal_user');
        $adminGuard = Auth::guard('web');

        // Attempt to login normal user
        if ($userGuard->attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/user-dashboard'); // Redirect normal users to their specific view
        }

        // Attempt to login admin
        if ($adminGuard->attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            $request->session()->regenerate();

            $role = Auth::guard('web')->user()->role;

            if ($role === 'admin' || $role === 'moderator') {
                return redirect()->intended('/dashboard'); // Redirect admins and moderators to the dashboard
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
