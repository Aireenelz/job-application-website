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
            $usertype=Auth()->user()->usertype;

            if($usertype=='user')
            {
                return view('dashboard');
            }
            else if($usertype=='admin')
            {
                //return view('admin.adminhome');
                return app(JobsController::class)->index();
            }
        }
    }

    public function post() 
    {
        return view("post");
    }
}
