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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bavand', function () {

    return view('filmupload' ,compact('name'));
});



Route::get('/amir', function () {
    $name= DB ::table('movies')->get();

    return view('main',compact('name') );
});






Route::get('/movie/{id}', 'movie_handler@get_details')-> where('id','[0-9]+');





Route::get('/index', 'uploadfilm@index');

Route::post('/store', 'uploadfilm@store');




Route::post('/store', 'search_film@store');
Route::post('/movie/store', 'submit_comment@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
