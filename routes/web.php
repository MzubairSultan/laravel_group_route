<?php

use Illuminate\Support\Facades\Route;

// 1) Topic Laravel Name Route  and 2) Redirect 


// laravel name route jb b apny koi route define krna hy to apny name route ko use krna hy isky ya faida hy k in future apko route chang krna pry to aik e jga change krny sy sari jga par automaticly change hojye ga eg

// Route::get('/', function () {
//     return view('welcome');
// });

// //  Route::get('/about', function () {
// //      return view('About');
// //  })->name('myabout');

//  Route::get('/post', function () {
//     return view('Post');
// })->name('mypost');

// // 2) ager user ny hmry about us page ko bookmark kia hy or in future hum usko change kr dety hy to jb wo hmary about us page ko access kry ga to usko error mily ga iska ya solution hy k hum  Redirect kry wo kesy 

// Route::get('/test', function () {
//     return view('About');
// })->name('myabout');

// Route::redirect('/about','/test');

// -----------------------------------------------------------------------------

// 3) Laravel Group Route 

//  jo same route hoty hy unko hum aik e group my likh dety hy isko bolty hy group route



// ub in sb my sy jo common cheez hy wo hy pages iska hum gropu route bny gy

Route::prefix('page')->group(function(){

    Route::get('/pic1',function (){
        return "<h1>picture 1</h1>";
    });
    
    Route::get('/pic2',function (){
        return "<h1>picture 2</h1>";
    });
    
    Route::get('/pic3',function (){
        return "<h1>picture 3</h1>";
    });
    
    
    Route::get('/pic4',function (){
        return "<h1>picture 4</h1>";
    });


});
// page not found k liye hum ya b use kr sakty hy 
Route::fallback(function(){
  return "<h1>Page Not Found</h1>";
});