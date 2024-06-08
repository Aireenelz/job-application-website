<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Jobs;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if($usertype=='user') //user to dashboard page
            {
                $jobs = Jobs::orderBy('id', 'desc')->get();
                return view('dashboard', compact('jobs'));
                
            } 

            else if($usertype=='admin')  // admin to admin page
            {
                $jobs = Jobs::orderBy('id', 'desc')->get();
                return view('admin.adminhome', compact('jobs'));
            }

            else 
            {
                return redirect()->back();
            }
        }
    }

    public function post() 
    {
        return view("post");
    }
}
