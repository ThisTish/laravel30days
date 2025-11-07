<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

// home page
Route::get('/', function () {
    return view('home');
});


// JOBS
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

// post new job
Route::post('/jobs', function() {
    
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
});

// edit job
Route::get('/jobs/{id}/edit', function($id){

    $job = Job::find($id);
    if(!$job){
        return redirect("/jobs");
    };

    return view('jobs.edit', ['job' => $job]);
});

// update.
Route::patch('/jobs/{id}', function($id){
    $job = Job::find($id);
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
});


// delete
Route::delete('/jobs/{job}', function(Job $job){

    $job->delete();
    return redirect('/jobs');
});

// get a single job page
Route::get('/jobs/{id}', function($id) {
    $job = Job::find($id);
        return view('jobs.show', ['job' => $job]);
            
});


// CONTACT
Route::get('/contact', function() {
    return view('contact');
});

