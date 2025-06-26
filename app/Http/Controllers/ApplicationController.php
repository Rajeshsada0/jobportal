<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Jobmodel; // You renamed Job to Jobmodels
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Handle job application submission.
     */
    public function apply(Request $request, Jobmodel $job)
    {
        //dd($request->all());

        // Validate user input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Upload resume to `storage/app/public/resumes`
        $resumePath = $request->file('resume')->store('resumes', 'public');

        // Create applicant entry
        Applicant::create([
            'job_id' => $job->id,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'resume' => $resumePath,
        ]);

        // Redirect back with success message
        return back()->with('success', 'Application submitted successfully!');
    }
}
