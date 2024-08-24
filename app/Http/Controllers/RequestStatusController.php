<?php
namespace App\Http\Controllers;

use App\Models\BacRequest;
use App\Models\LicenseRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestStatusController extends Controller
{
    public function showBacStatus()
    {
        // Get the currently authenticated applicant
        $applicant = Auth::guard('applicant')->user();

        // Check if the applicant already has a BacRequest
        $existingBacRequest = BacRequest::where('applicant_id', $applicant->id)->first();

        if ($existingBacRequest) {
            // Redirect to the status page with the bacRequest ID
            return view('applicant.equi.bac-request-status', [
                'bacRequest' => $existingBacRequest,
                'status' => $existingBacRequest->status
            ]);
        }

        // Return the view for submitting a new BAC request
        return view('applicant.equi.bac');
    }

    public function showLicenseStatus($licenseRequestId)
    {
        // Fetch the LicenseRequest using the provided ID
        $licenseRequest = LicenseRequest::findOrFail($licenseRequestId);

        // Determine the status of the request
        $status = $licenseRequest->status; // 'pending', 'rejected', 'accepted'

        // Pass both $licenseRequest and the status to the view
        return view('applicant.equi.license-request-status', [
            'licenseRequest' => $licenseRequest,
            'status' => $status
        ]);
    }

}