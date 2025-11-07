<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;



// HOME PAGE
Route::view('/', 'home');

// CONTACT PAGE
Route::view('/contact', 'contact');

// JOBS
Route::resource('jobs', JobController::class
        // *example if you don't want all issceud(index, store, show, create, update, edit, destroy)
        // , [
            // 'except' => ['edit', 'create']
            // or
            // 'only' => ['index', 'show']
        // ]
);


// >BTS
// JOBS
// Route::controller(JobController::class)->group(function(){
//     // All Jobs Page
//// index
//     Route::get('/jobs',  'index');

//     // create job page
////create
//     Route::get('/jobs/create', 
//     'create'
//     );

//     // post new job
////store
//     Route::post('/jobs',  
//     'store'
//     );

//     // edit job
////edit
//     Route::get('/jobs/{id}/edit', 
//     'edit'
//     );

//// update.
//     Route::patch('/jobs/{job}',
//     'update'
//     );

//     // delete
//     Route::delete('/jobs/{job}', 
//     'destroy'
//     );

//     // get a single job page
////show
//     Route::get('/jobs/{job}', 
//     'show'
//     );

// });

