<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BacRequestController;
use App\Http\Controllers\LicenseRequestController;
use App\Http\Controllers\RequestStatusController;

/*
|--------------------------------------------------------------------------
| Applicant Routes
|--------------------------------------------------------------------------
|
| These routes handle the applicant-specific pages for both Arabic and 
| English versions of the website.
|
*/

Route::prefix('applicant')->name('applicant.')->group(function () {
    Route::middleware('isApplicant')->group(function () {
        // English version dashboard
        Route::view('index', 'applicant.index')->name('index'); // English dashboard

        // Arabic version dashboard
        Route::view('index-ar', 'applicant.index-ar')->name('index-ar'); // Arabic dashboard

        // Choose your certificate (shared route, adjust if needed for multilingual)
        Route::view('request', 'applicant.equi.choose-your-certificate')
            ->name('choose.your.certificate');

        // Bac request creation (shared route)
        Route::get('request/bac/create', [BacRequestController::class, 'create'])
            ->name('bac.create');
        Route::post('request/bac/store', [BacRequestController::class, 'store'])
            ->name('bac.store');
        Route::get('request/bac/status/{bacRequest}', [RequestStatusController::class, 'showBacStatus'])
            ->name('bac.request.status');

        // License request creation (shared route)
        Route::get('request/license', [LicenseRequestController::class, 'create'])
            ->name('license.create');
        Route::post('bac-request', [LicenseRequestController::class, 'store'])
            ->name('license.store');
        Route::get('request/license/status/{licenseRequest}', [RequestStatusController::class, 'showLicenseStatus'])
            ->name('license.request.status');
    });

    // Authentication routes for applicants
    require __DIR__ . '/applicant_auth.php';
});
