<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

//  Route::get('/about', function () {
//      return view('About');
//  });

// anothe method for routes use

//Route::view('/about','About');

// making subroute method

// Route::get('/about/firstabout', function () {
//     return view('firstabout');
// });
//----------------------------------------------------------------
// 2)Route With Parameter
//  Lakin iska aik noqsan ya hy k ager user ny koi value pass nahi ki to aye ga error page not found iska solution nichy wala code hoga

    // Route::get('/about/{id}', function (String $value) {
    //     return "<h1>About Id:".$value."</h1>";
    // });
//  agr user value nahi dy ga to iska solution ya hog  error sy bchny k liye
    // Route::get('/about/{id?}', function (String $value = null) {
    //     if($value){
    //         return "<h1>About Id:".$value."</h1>";
    //     }else{
    //         return "<h1>id not found</h1>";
    //     }
        
    // });



// ager hum chaty hy user sy multiple value ly  

// Route::get('/about/{id?}/commint/{commintid?}', function (String $value = null, String $comid = null) {
//          if($value){
//              return "<h1>About Id:".$value."</h1>"."<h2>commment id".$comid."</h2>";
//          }else{
//              return "<h1>id not found</h1>";
//          }

//         });

//  -----------------------------------------------------------------------------------
//    Laravel Route constrint iska mtlb ya hy k user numeric value dy dosri value na day 
    //  ager hum constrians lgana chaty hy value k oper

    // 1)Ager hum chaty hy k user sirf numveric value hi press kry  usky liye method 

    //  Route::get('/about/{id?}', function (String $value = null, ) {
    //       if($value){
    //           return "<h1>About Id:".$value."</h1>";
    //       }else{
    //           return "<h1>id not found</h1>";
    //       }

    //      })->whereNumber('id');

    // 2) Ager hum chaty hy k user sirf value alpha my dy to

    //   Route::get('/about/{id?}', function (String $value = null, ) {
    //        if($value){
    //            return "<h1>About Id:".$value."</h1>";
    //        }else{
    //            return "<h1>id not found</h1>";
    //        }

    //      })->whereAlpha('id');

    // 3) Ager hum chaty hy k user sirf value alpha numeric my ho to 
    //  Note : ismy hum sirf alpha number b dy sakty hy 
    //  or numeric value b dy sakty hy ya dono day sakty hy
    // Route::get('/about/{id?}', function (String $value = null, ) {
    //     if($value){
    //         return "<h1>About Id:".$value."</h1>";
    //     }else{
    //         return "<h1>id not found</h1>";
    //     }

    //   })->whereAlphaNumeric('id');

    //   4) Ager hum chaty hy k user hmri di hoe value my sy he value ko enter kry tb

    Route::get('/about/{id?}', function (String $value = null, ) {
        if($value){
            return "<h1>About Id:".$value."</h1>";
        }else{
            return "<h1>id not found</h1>";
        }

      })->whereIn('id',['movie','song','img']);

    //   --------------------------------------------------------

    // 5) ager hum chty hy hum apna regular expression bnye to  us ky liye

    Route::get('/about/{id?}', function (String $value = null, ) {
        if($value){
            return "<h1>About Id:".$value."</h1>";
        }else{
            return "<h1>id not found</h1>";
        }

      })->where('id','[0-9]+');

