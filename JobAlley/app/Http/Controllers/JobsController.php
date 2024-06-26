<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = Jobs::orderBy('id', 'desc')->get();
       
        return view('admin.adminhome', ['jobs' => $jobs]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function save(Request $request)
    {
        $validation = $request->validate([
            'position' => 'required',
            'company' => 'required',
            'location' => 'required',
            'description' => 'required',
        ]);

        // new jobs instance
        $job = new Jobs();
        $job->position = $request->input('position');
        $job->company= $request->input('company');
        $job->location = $request->input('location');
        $job->description = $request->input('description');

        // save new jobs
        $saved = $job->save();

        if ($saved) 
        {
            session()->flash('success', 'New Job Created Successfully! ');
            return redirect(route('home'));
        }
        else 
        {
            session()->flash('error', 'Problem Occured, Try Again');
            return redirect(route('admin.create'));
        }

    }

    public function edit($id)
    {
        $jobs = Jobs::findOrFail($id);
        return view('admin.update', compact('jobs'));
    }

    public function delete($id)
    {
        $jobs = Jobs::findOrFail($id)->delete();
        if ($jobs) {
            return response()->json(['message' => 'Job deleted successfully']);
        } else {
            return response()->json(['message' => 'Failed to delete job'], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $jobs = Jobs::findOrFail($id);
        $position = $request->position;
        $company = $request->company;
        $location = $request->location;
        $description = $request->description;
 
        $jobs->position = $position;
        $jobs->company = $company;
        $jobs->location = $location;
        $jobs->description = $description;
        
        $data = $jobs->save();
        if ($data) {
            session()->flash('success', 'Job Update Successfully');
            return redirect(route('home'));
        } else {
            session()->flash('error', 'Problem Occured, Try Again');
            return redirect(route('admin.update'));
        }
    }
}
