<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('welcome2');
    //return Redirect::to('http://www.petsatpark.com/public/login'); 
    if (Auth::check()){
 		return Redirect::to('/main');
    }else{
    	return Redirect::to('login');
    }
});

Route::get('appointment', [
	'uses' => 'AppointmentController@index',
	'as' => 'appo']);

//Route::resource('login','LoginController');

Route::get('main', [
	'uses' => 'LoginController@menu',
	'as' => 'main']);

// Authentication routes...
Route::get('login', [
	'uses' => 'Auth\AuthController@getLogin',
	'as' => 'login'
	]);
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', [
	'uses' => 'Auth\AuthController@getLogout',
	'as' => 'logout'
	]);

// Registration routes...
Route::get('register', [
	'uses' => 'Auth\AuthController@getRegister',
	'as' => 'register'
	]);
Route::post('register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', [
	'uses' => 'Auth\PasswordController@getEmail',
	'as' => 'password/email'
	]);
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', [
	'uses' => 'Auth\PasswordController@getReset',
	'as' => 'password/reset'
	]);
Route::post('password/reset', 'Auth\PasswordController@postReset');

//dashboard
Route::resource('user-system', 'UserController');


/*Route::get('/', function () {


 	if (Auth::check())

      	 return Redirect::to('/principal');

    else
      
      	 return view('index');
   

});


Route::resource('login','LoginController');

Route::get('principal','LoginController@menu');
Route::get('logout', 'LoginController@logout');
Route::get('masterdata', 'LoginController@masterdata');


Route::get('forgotpw', 'LoginController@forgotpw');
Route::get('create-account', 'UserController@create_account_from_index');


Route::post('password/email', 'Auth\PasswordController@postEmail');


Route::resource('user-system', 'UserController');
Route::get('user-system/{id}/delete', 'UserController@destroy');

Route::resource('sales-report', 'ReportController');

Route::get('report-docs', 'ReportController@report_docs');

Route::resource('my-cart', 'CartController');

Route::get('preview-file', 'ReportController@preview_file');*/