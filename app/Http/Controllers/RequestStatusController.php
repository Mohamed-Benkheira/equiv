<?php
namespace App\Http\Controllers;

use App\Models\BacRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestStatusController extends Controller
{
    public function show(BacRequest $bacRequest)
    {
        // Load the related applicant and acceptedRequest
        $bacRequest->load(['applicant', 'acceptedRequest']);

        // Check if the request has been accepted
        $isAccepted = $bacRequest->acceptedRequest()->exists();

        // Return the view with the data
        return view('applicant.equi.bac-request-status', compact('bacRequest', 'isAccepted'));
    }
}