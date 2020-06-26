<?php

use Illuminate \Support\Facades\Route;

Route::get ('/',function (){
    return view ('login');
});
//login
Route::get('login','loginController@show');

Route::post('login', ['as'=>'loginForm','uses'=>'loginController@checkCredentials']);
//registration user

Route::get('user_registration','UserRegistrationController@show');

Route::post('user_registration', ['as'=>'userRegistrationForm','uses'=>'UserRegistrationController@userRegistrationForm']);

//registration  company

Route::get('company_registration','CompanyRegistrationController@show');

Route::post('company_registration', ['as'=>'companyRegistrationForm','uses'=>'CompanyRegistrationController@companyRegistrationForm']);

//packs
Route::('packs','packsController@show');

Route::get('pack_registration', 'packsRegistrationController@show');

Route::post('pack_registration', ['as' =>'packRegistrationForm','uses'=>'packsRegistrationController@packRegistrationForm']);


//track

Route::('tracks','tracksController@show');

Router::get('track_registration', 'tracksRegistrationController@show');

Router::post('track_registration', ['as'=>'trackRegistrationForm', 'uses'=>'tracksRegistrationController@trackRegistrationForm']);



