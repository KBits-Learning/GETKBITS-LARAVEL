<?php

use Illuminate \Support\Facades\Route;

Route::get ('/',function (){
    return view ('login');
});

Route::get('login','LoginController@show');