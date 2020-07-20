 <?php
use Illuminate \Support\Facades\Route;
use Illuminate\Routing\Router;

Route::get('/','loginController@show');
//login
Route::get('login','loginController@show');

Route::post('login', ['as'=>'loginForm','uses'=>'loginController@checkCredentials']);
//registration user

Route::get('user_registration','UserRegistrationController@show');

Route::post('user_registration', ['as'=>'userRegistrationForm','uses'=>'UserRegistrationController@userRegistrationForm']);

//registration  company

Route::get('company_registration','CompanyRegistrationController@show');

Route::post('company_registration', ['as'=>'companyRegistrationForm','uses'=>'CompanyRegistrationController@companyRegistrationForm']);

//home
Route::get('home','homeController@index');

//packs
Route::get('packs_home','packsController@show');

Route::get('packs_page','packsPageController@show');

Route::get('pack_registration', 'packRegistrationController@show');

Route::post('pack_registration', ['as' =>'packRegistrationForm','uses'=>'packRegistrationController@packRegistrationForm']);

//track

Route::get('tracks_home','tracksController@show');

Route::get('track_page','tracksPageController@show');

Route::get('tracks_registration', 'tracksRegistrationController@show');

Route::post('tracks_registration', ['as' =>'trackRegistrationForm','uses' => 'tracksRegistrationController@trackRegistrationForm']);
//Route::post()

//search

Route::get('members/search', 'searchbarController@index');

//setting

//Route::get('setting','settingController@show'); 

?>
