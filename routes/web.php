<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    $people = ['Taylor', 'Matt', 'Jeffrey'];
//    
////    return view('welcome', ['people' => $people]);
//    return view('welcome', compact('people'));
////    return view('welcome')->with('people', $people));
////    return view('welcome')->withPeople($people);
////    return 'Hi there';
//});
//Route::get('about', function () {
////    return view('welcome');
//    return view ('pages.about'); // resoures/view/pages/about.blade.php
//});

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
        