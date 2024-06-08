<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Jobs;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForwardMail;

use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    // all applicants for admin view

    public function index() 
    {

        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if($usertype=='user') //user to dashboard page
            {
                $applications = Application::with('user', 'job')->get(); 
                
                return view('profile.view-applied-jobs', compact('applications'));
                
            } 

            else if($usertype=='admin')  // admin to admin page
            {
                $applications = Application::with('user', 'job')->get(); 
        
                return view( 'admin.application', compact( 'applications'));
            }
            
        }
    }

    // for user to apply
    public function create($jobId)
    {
        
        $job = Job::findOrFail($jobId);
        return view('job-seeker.jobapply', compact('jobId', 'job'));
    }

    // stores the application details from user to db on submit
    public function store(Request $request, $jobId)
    {
        
        $request->validate([
            'fullName' => 'required',
            'contactNumber' => 'required',
            'email' => 'required|email',
            'resume' => 'required',
            'coverLetter' => 'required',
        ]);

        // Save application details to the database
        Application::create([
            'user_id' => Auth::id(),
            'job_id' => $jobId,
            'name' => $request->input('fullName'),
            'contact' => $request->input('contactNumber'),
            'email' => $request->input('email'),
            'resume' => $request->input('resume'),
            'cover_letter' => $request->input('coverLetter'),
            'status' => 'pending',
        ]);

        return redirect()->route('home')->with('success', 'Application submitted successfully.');
    }

    // for admin shows more details of applicant onclick (KIV)
    public function show($id)
    {
        $application = Application::findOrFail($id);
        //return view('admin.applications.show', compact('application'));
    }

    public function forward($id)
    {
        $application = Application::findOrFail($id);
        $application->status = 'approved';
        $application->save();

        // Send email to the company
        Mail::to('receipentemail@gmail.com')->send(new ForwardMail($application->user->name, $application, $application->resume));

        return redirect()->route('application.index')->with('success', 'Application forwarded to the company.');
    }
}
