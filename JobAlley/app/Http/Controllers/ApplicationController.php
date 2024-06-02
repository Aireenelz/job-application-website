<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index() 
    {
        $applicants = [
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com', 'status' => 'Pending'],
            ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com', 'status' => 'Approved'],
            // Add more dummy data as needed
        ];

        return view( 'admin.application', compact( var_name:'applicants'));
    }
}
