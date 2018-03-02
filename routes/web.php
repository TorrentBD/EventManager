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

//User routing............

Route::get('/', function () {
    return view('users.home');
});
Route::get('/signup', function () {
    return view('users.register');
});

Route::get('/about', 'StudentController@about')->name('about');
Route::post('/create', 'StudentController@create')->name('create');


//Admin panel routing.....................//
Route::prefix('admin')->group(function () {
	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');

	//Candidate routing
	Route::get('/candidate', 'HomeController@candidate')->name('candidate');
	Route::get('/deletecand/{id}', 'HomeController@deletecand')->name('deletecand');


	//Event routing

	Route::get('/about', 'HomeController@about')->name('about');
	Route::get('/addevent', 'HomeController@addevent')->name('addevent');
	Route::post('/e_create', 'HomeController@e_create')->name('e_create');
	Route::get('/edit/{id}', 'HomeController@edit')->name('edit');
	Route::post('/update/{id}', 'HomeController@update')->name('update');
	Route::get('/delete/{id}', 'HomeController@delete')->name('delete');

	//Fqa routing
	Route::get('/fqa', 'HomeController@fqa')->name('fqa');
	Route::get('/cfqa', 'HomeController@create_fqa')->name('cfqa');
	Route::post('/addfqa', 'HomeController@fqaadd')->name('addfqa');
	Route::get('/deletefqa/{id}', 'HomeController@deletefqa')->name('deletefqa');

});
	 

 


