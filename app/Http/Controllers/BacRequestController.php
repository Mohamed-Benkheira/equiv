<?php
namespace App\Http\Controllers;

use App\Models\BacRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BacRequestController extends Controller
{
    public function create(Request $request)
    {
        return view('applicant.bac.create');

    }
    public function store(Request $request)
    {
        // dd($request);
        // Validate the request
        $validated = $request->validate([
            'school_name' => 'required|string|max:255',
            'certificate_date' => 'required|date',
            'id_card' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'certificate_file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'degrees_paper' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'info_accuracy' => 'accepted',
        ]);

        // Create a new BacRequest instance
        $bacRequest = new BacRequest();
        $bacRequest->applicant_id = Auth::guard('applicant')->id(); // Using the applicant guard
        $bacRequest->school_name = $validated['school_name'];
        $bacRequest->certificate_date = $validated['certificate_date'];
        $bacRequest->info_accuracy = $validated['info_accuracy'];

        // Handle file uploads
        if ($request->hasFile('id_card')) {
            $bacRequest->id_card_path = $request->file('id_card')->store('documents/id_cards', 'public');
        }
        if ($request->hasFile('certificate_file')) {
            $bacRequest->certificate_file_path = $request->file('certificate_file')->store('documents/certificates', 'public');
        }
        if ($request->hasFile('degrees_paper')) {
            $bacRequest->degrees_paper_path = $request->file('degrees_paper')->store('documents/degrees', 'public');
        }

        // Save the BacRequest instance to the database
        $bacRequest->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your request has been submitted successfully!');
    }
}
