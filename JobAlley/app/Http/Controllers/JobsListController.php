<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsListController extends Controller
{
    // Method to show jobs list page
    public function index() {
        return view('job-seeker.jobs');
    }
}
