<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class MyjobController extends Controller
{
    public function job()
    {
        //return view('profile.myjobs');
        // get logged in user id 
        $user = auth()->user();

        // Retrieve the applications for the current user with the related job data
        $applications = Application::where('user_id', $user->id)->with('job')->get();

        // Pass the applications data to the view
        return view('profile.myjobs', compact('applications'));
    }
}
