<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
// get all jobs page with pagination
    public function index(){
        $jobs = Job::with('employer')->latest()->cursorPaginate(3);
    return view('jobs.index', [
        'jobs' => $jobs
    ]
);
    }

// create job page
    public function create(){
        return view('jobs.create');
    }

// show one job
    public function show(Job $job){
        if(!$job){
            abort(404);
        };

        return view('jobs.show', ['job'=> $job]);

    }

// post new job
    public function store(){
        
        request()->validate([
            'title'=>['required', 'min:3'],
            'salary'=>['required']
        ]);

        Job::create([
            'title'=>request('title'),
            'salary'=>request('salary'),
            'employer_id'=> 1
    ]);

    return redirect('/jobs');
    }

// retrieve job to edit
    public function edit($id){
        
    $job = Job::find($id);
    if(!$job){
        return redirect("/jobs");
    };

    return view('jobs.edit', ['job' => $job]);

    }

    // update job with requested data
    public function update(Job $job){
        request()->validate([
        'title'=>['required', 'min:3'],
        'salary'=>['required', 'min:4', 'max:10']
    ]);

    if(!$job){
        return redirect("/jobs");  
    };
    
    $job->update([
        'title'=>request('title'),
        'salary'=>request('salary')
    ]);
    
    return redirect("/jobs/{$job->id}");
    }

    // delete job
    public function destroy(Job $job){
        $job->delete();
        return redirect('/jobs');
    }
}
