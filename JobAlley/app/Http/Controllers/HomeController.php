<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if($usertype=='user') //user to dashboard page
            {
                return view('dashboard');
            } 

            else if($usertype=='admin')  // admin to admin page
            {
                return view('admin.adminhome');
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
