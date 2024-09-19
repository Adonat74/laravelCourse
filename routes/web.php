<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    $jobs = Job::all();
    dd($jobs);
//    return view('home');

});

Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});
