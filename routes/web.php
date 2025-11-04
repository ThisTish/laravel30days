<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

// home page
Route::get('/', function () {
    return view('home');
});

// get all jobs page with pagination
Route::get('/jobs ', function()  {
    $jobs = Job::with('employer')->latest()->cursorPaginate(3);
    return view('jobs.index', [
        'jobs' => $jobs
    ]
);
});


// create job page
Route::get('/jobs/create', function(){
    return view('jobs.create');
});

// contact page
Route::get('/contact', function() {
    return view('contact');
});

// post new job
Route::post('/jobs', function() {

    Job::create([
        'title'=>request('title'),
        'salary'=>request('salary'),
        'employer_id'=> 1
    ]);

    return redirect('/jobs');
});

// get a single job page
Route::get('/jobs/{id}', function($id) {
    $job = Job::find($id);
        return view('jobs.show', ['job' => $job]);
            
});