<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\NormalUserRegisterController;
use App\Http\Controllers\Auth\NormalUserLoginController;
use App\Http\Controllers\BacRequestController;
use App\Http\Controllers\RequestStatusController;

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
        Route::view('request', 'applicant.equi.choose-your-certificate')->name('choose.your.certificate');
        // Route::view('request', 'applicant.equi.request')->name('request');
        // Route::view('request/bac', 'applicant.equi.bac')->name('bac');
        Route::get('request/bac', [BacRequestController::class, 'create'])
            ->name('bac.create');
        Route::post('bac-request', [BacRequestController::class, 'store'])
            ->name('bac.store');
        // Route::view('request-status', 'applicant.equi.request-status')->name('request-status');
        Route::get('request/bac/status/{bacRequest}', [RequestStatusController::class, 'show'])
            ->name('request-status');

    });


    require __DIR__ . '/applicant_auth.php';
    // Route::view('/applicant/login', 'applicant.login');
    // Route::view('/applicant/register', 'applicant.register');

});



