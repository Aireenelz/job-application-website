<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class MyjobController extends Controller
{
    public function job()
    {
    
        // get user logged in
        $user = auth()->user();

        $applications = Application::where('user_id', $user->id)->with('job')->get();

        return view('profile.myjobs', compact('applications'));
        //return view('profile.myjobs');
    }
}
