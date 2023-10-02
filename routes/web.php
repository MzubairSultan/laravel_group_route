<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

 Route::get('/about', function () {
     return view('About');
 });

// anothe method for routes use

//Route::view('/about','About');

// making subroute method

Route::get('/about/firstabout', function () {
    return view('firstabout');
});
