<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Jobmodel;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {

        $jobs = Jobmodel::get();
        return view('public.index', compact('jobs'));
    }

    public function show(Jobmodel $job)
    {
        return view('public.show', compact('job'));
    }
    function dashboard()
    {
        $jobCount = Jobmodel::count();
        $applicantCount = Applicant::count();

        return view('dashboard', compact('jobCount', 'applicantCount'));
    }
}
