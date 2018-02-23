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
    return view('users.register');
});

Route::get('/event', function () {
    return view('users.home');
});

Route::post('/create', 'StudentController@create')->name('create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/candidate', 'HomeController@candidate')->name('candidate');

//Event routing

Route::get('/about', 'HomeController@about')->name('about');
Route::get('/addevent', 'HomeController@addevent')->name('addevent');
Route::post('/e_create', 'HomeController@e_create')->name('e_create');
Route::get('/delete/{id}', 'HomeController@delete')->name('delete');


 

 


