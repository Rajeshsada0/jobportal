<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\Jobmodel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Jobmodel::all();
        return view('admin.jobs.index', ['jobs' => $jobs]);
    }

    public function create()
    {
        return view('admin.jobs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'salary' => 'nullable|numeric',
            'deadline' => 'required|date',
        ]);

        Jobmodel::create($validatedData);

        return redirect()->route('admin.jobs.index')
            ->with('success', 'Job created successfully!');
    }

    public function edit(Jobmodel $job)
    {
        return view('admin.jobs.edit', compact('job'));
    }

    public function update(Request $request, Jobmodel $job)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'salary' => 'nullable|numeric',
            'deadline' => 'required|date',
        ]);
        $job->update($data);
        return redirect()->route('admin.jobs.index');
    }

    public function destroy(Jobmodel $job)
    {
        $job->delete();
        return redirect()->route('admin.jobs.index');
    }

    public function applicants(Jobmodel $job)
    {
        return view('admin.jobs.applicants', [
            'job' => $job,
            'applicants' => $job->applicants
        ]);
    }
    function applicantlist()
    {

        $applicants = DB::table('applicants')
            ->join('jobmodels', 'applicants.job_id', '=', 'jobmodels.id')
            ->select('applicants.*', 'jobmodels.title as title')
            ->get();


        return view('admin.jobs.applicantlist', compact('applicants'));
    }
}
