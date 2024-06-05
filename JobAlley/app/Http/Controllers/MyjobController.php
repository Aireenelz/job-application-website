<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyjobController extends Controller
{
    public function job()
    {
        return view('profile.myjobs');
    }
}
