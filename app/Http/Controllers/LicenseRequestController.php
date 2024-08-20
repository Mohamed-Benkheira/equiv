<?php
namespace App\Http\Controllers;

use App\Models\LicenseRequest;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LicenseRequestController extends Controller
{
    /**
     * Show the form for creating a new license request.
     */
    public function create(Request $request)
    {
        // // // Get the currently authenticated user's ID
        // $applicantId = request()->applicant()->id;

        // // Check if the applicant already has a License request
        // $existingRequest = LicenseRequest::where('applicant_id', $applicantId)->first();

        // // If an existing request is found, redirect to the status page
        // if ($existingRequest) {
        //     return redirect()->route('applicant.request-status', $existingRequest)
        //         ->with('info', 'You have already submitted a request. You can only view the status.');
        // }

        return view('applicant.equi.license');
    }

    /**
     * Store a newly created license request in storage.
     */
    public function store(Request $request)
    {

        // dd($request);
        // Validate the request
        $validated = $request->validate([
            'school_name' => 'required|string|max:255',
            'certificate_date' => 'required|date',
            'id_card' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'bac_certificate_file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'certificate_for_equivalence_file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'statement_of_marks_or_certificate_appendix' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'info_accuracy' => 'accepted',
        ]);

        // Create a new License instance
        $licenseRequest = new LicenseRequest();
        $licenseRequest->applicant_id = Auth::guard('applicant')->id(); // Using the applicant guard
        $licenseRequest->school_name = $validated['school_name'];
        $licenseRequest->certificate_date = $validated['certificate_date'];
        $licenseRequest->info_accuracy = $validated['info_accuracy'];

        // Handle file uploads
        if ($request->hasFile('id_card')) {
            $licenseRequest->id_card_path = $request->file('id_card')->store('LicenseDocument/id_cards', 'public');
        }
        if ($request->hasFile('bac_certificate_file')) {
            $licenseRequest->bac_certificate_file_path = $request->file('bac_certificate_file')->store(
                'LicenseDocument/bac_certificates',
                'public'
            );
        }
        if ($request->hasFile('certificate_for_equivalence_file')) {
            $licenseRequest->certificate_for_equivalence_file_path =
                $request->file('certificate_for_equivalence_file')->store('LicenseDocument/certificates_for_equivalence', 'public');
        }
        if ($request->hasFile('statement_of_marks_or_certificate_appendix')) {
            $licenseRequest->statement_of_marks_or_certificate_appendix =
                $request->file('statement_of_marks_or_certificate_appendix')->store('LicenseDocument/statements_of_marks_or_certificate_appendix', 'public');
        }

        // Save the License instance to the database
        $licenseRequest->save();

        // Redirect back with a success message
        return redirect()->back();
    }
}