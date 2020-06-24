<?php

use Illuminate \Support\Facades\Route;

Route::get ('/',function (){
    return view ('login');
});

Route::get('login','loginController@show');

Route::post('login', ['as'=>'loginForm','uses'=>'loginController@checkCredentials']);

Route::get('user_registration','UserRegistrationController@show');

Route::post('user_registration', ['as'=>'userRegistrationForm','uses'=>'UserRegistrationController@userRegistrationForm']);

Route::get('company_registration','CompanyRegistrationController@show');

Route::post('company_registration', ['as'=>'companyRegistrationForm','uses'=>'CompanyRegistrationController@companyRegistrationForm']);

<<<<<<< HEAD
Route::get('home','homeController@index'); 
=======
Route::get('home','HomeController@index');
>>>>>>> b36a2a553d4c36382aeaafc015d4f008396a6b61
