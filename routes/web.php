<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// English version route (/en)
Route::get('/en', function () {
    if (Auth::guard('applicant')->check()) {
        // Redirect to applicant's English dashboard
        return redirect()->route('applicant.index'); // Applicant's dashboard (English)
    }
    // Show English version of the homepage
    return view('index');
})->name('welcome');

// Arabic version route (/)
Route::get('/', function () {
    if (Auth::guard('applicant')->check()) {
        // Redirect to applicant's Arabic dashboard
        return redirect()->route('applicant.index-ar'); // Applicant's dashboard (Arabic)
    }
    // Show Arabic version of the homepage
    return view('index-ar');
})->name('welcome.ar');

// Applicant routes
require __DIR__ . '/applicant.php';
// require __DIR__ . '/auth.php';
