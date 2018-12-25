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

Auth::routes();

// static pages routes

Route::get('/index', 'HomeController@index');
Route::get('/logout','HomeController@logout');

Route::get('/', function () {
    return view('index');
});

Route::get('about',function(){
    return view('about');
});

Route::get('contact',function(){
   return view('contact');
});

//dynamic pages routes
// Route::get('cvs','CvController@index');
// Route::get('cvs/create','CvController@create');
// Route::get('cvs/{id}/edit','CvController@edit');
// Route::post('cvs','CvController@store');
// Route::put('cvs/{id}','CvController@update');
// Route::delete('cvs/{id}','CvController@destroy');

Route::resource('cvs', 'CvController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
