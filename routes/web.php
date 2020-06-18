<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('login');  

/*---route to  home----*/ 
Route ::view ('/main','main')->('main');    
});

 /*---route to tracks--*/
 route ::veiw ('/Tracks','Tracks')->('Tracks');
});