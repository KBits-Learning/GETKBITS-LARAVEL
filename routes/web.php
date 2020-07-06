 <?php

use Illuminate \Support\Facades\Route;
use Illuminate\Routing\Router;

Route::get('/','loginController@show');
//login
Route::get('login','loginController@show');

Route::post('login', ['as'=>'loginForm','uses'=>'loginController@checkCredentials']);

//home controoller
//Route::get('/','homeController@show');

//registration user

Route::get('user_registration','UserRegistrationController@show');

Route::post('user_registration', ['as'=>'userRegistrationForm','uses'=>'UserRegistrationController@userRegistrationForm']);

//registration  company

Route::get('company_registration','CompanyRegistrationController@show');

Route::post('company_registration', ['as'=>'companyRegistrationForm','uses'=>'CompanyRegistrationController@companyRegistrationForm']);

//home
Route::get('home','homeController@index');

//packs
Route::get('packs','packsController@show');

Route::get('packs_registration', 'packRegistrationController@show');

Route::post('packs_registration', ['as' =>'packRegistrationForm','uses'=>'packRegistrationController@packRegistrationForm']);


//track

Route::get('tracks','tracksController@show');

Route::get('track_registration', 'trackRegistrationController@show');

Route::post('track_registration', ['as'=>'trackRegistrationForm', 'uses'=>'tracksRegistrationController@trackRegistrationForm']);



//search

Route::get('members/search', 'searchbarController@index');

//setting

//Route::get('setting','settingController@show'); 

?>
