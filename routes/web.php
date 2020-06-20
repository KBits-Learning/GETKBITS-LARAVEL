<?php

use Illuminate \Support\Facades\Route;

Route::get ('/',function (){
    return view ('Welcome');
});

Route::get('login','LoginController@show');