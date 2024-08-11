<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\NormalUserRegisterController;
use App\Http\Controllers\Auth\NormalUserLoginController;

/*
|--------------------------------------------------------------------------
| Applicant user
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('applicant')->name('applicant.')->group(function () {
    Route::middleware('isApplicant')->group(function () {

        Route::view('index', 'applicant.index')->name('index');

    });


    require __DIR__ . '/applicant_auth.php';
    // Route::view('/applicant/login', 'applicant.login');
    // Route::view('/applicant/register', 'applicant.register');

});



