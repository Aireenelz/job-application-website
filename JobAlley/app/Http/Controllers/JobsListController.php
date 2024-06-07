<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;

class JobsListController extends Controller
{
    // Method to show jobs list page
    public function index() {

        // Fetch all jobs from the database
        $jobs = Jobs::all();

        // Pass jobs data to the view
        return view('job-seeker.jobsearch', compact('jobs'));
    }

    // Method to filter jobs based on position and location
    public function filter(Request $request) {
        // Get query value from job-title input field 
        $jobTitle = $request->input('job-title');
        // Get query value from job-location input field
        $jobLocation = $request->input('job-location');

        // Query jobs based on the provided job title and location
        $jobs = Jobs::where('position', 'like', "%$jobTitle%")
                    ->where('location', 'like', "%$jobLocation%")
                    ->get();

        return view('job-seeker.jobsearch', ['jobs' => $jobs]);
    }

    // Method to navigate to job details page
    public function detail($id) {
        // Fetch the job details from the database
        $job = Jobs::findOrFail($id);

        // Pass job data to the view
        return view('job-seeker.jobdetail', compact('job'));
    }

    public function apply($id) {
        // Fetch the job details by ID
        $job = Jobs::findOrFail($id);
    
        // Render the job apply view without passing the jobId
        return view('job-seeker.jobapply', compact('job'));
    }
    
}