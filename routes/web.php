<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\NormalUserRegisterController;
use App\Http\Controllers\Auth\NormalUserLoginController;

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

Route::get('/en', function () {
    if (Auth::guard('applicant')->check()) {
        return redirect()->route('applicant.index'); // Replace with your applicant's dashboard or desired view route
    }
    return view('index');
})->name('welcome');

Route::get('/', function () {
    if (Auth::guard('applicant')->check()) {
        return redirect()->route('applicant.index-ar'); // Replace with your applicant's dashboard or desired view route
    }
    return view('index-ar');
})->name('welcome.ar');


require __DIR__ . '/applicant.php';
// require __DIR__ . '/auth.php';
