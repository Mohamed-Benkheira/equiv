<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\NormalUserRegisterController;
use App\Http\Controllers\Auth\NormalUserLoginController;
use App\Http\Controllers\BacRequestController;
use App\Http\Controllers\LicenseRequestController;
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

        Route::get('request/bac/create', [BacRequestController::class, 'create'])
            ->name('bac.create');
        Route::post('request/bac/store', [BacRequestController::class, 'store'])
            ->name('bac.store');
        Route::get('request/bac/status/{bacRequest}', [RequestStatusController::class, 'showBacStatus'])
            ->name('bac.request.status');
        // 
        Route::get('request/license', [LicenseRequestController::class, 'create'])
            ->name('license.create');
        Route::post('bac-request', [LicenseRequestController::class, 'store'])
            ->name('license.store');
        Route::get('request/license/status/{licenseRequest}', [RequestStatusController::class, 'showLicenseStatus'])->name('license.request.status');
    });


    require __DIR__ . '/applicant_auth.php';
    // Route::view('/applicant/login', 'applicant.login');
    // Route::view('/applicant/register', 'applicant.register');

});



