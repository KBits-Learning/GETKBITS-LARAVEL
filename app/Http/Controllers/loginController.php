<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

 class LoginController extends Controller
 {
	public function show(){

		return view('login');
	}

	// get user credentials
	// validate user credentials
	// successfully pass user to their homepage
	//		else return error

	public function checkCredentials(Request $request){

<<<<<<< HEAD
{
public  function show (){
     return view('login');

}

//user credentials 
public function checkCredentials (Request $request) {
$user = [];
$user['email'] = $request->get('email');
$user['password'] = $request->get('password');
$encrypted_password = sha1($user['password']);

//user validation 
$users = DB::select('select id from users where email = ? AND  password = ?', [$user['email'], $encrypted_password]);
session (['user_id' => $users[0]->id]);

//wrong user messege 
return back()->with('status','Somthing is wrong', 'Check your email and password');


//log in to home page 
return redirect('homeController@index'); 





=======
		$user = [];
		$user['email'] = $request->get('email');
		$user['password'] = $request->get('password');

		$encrypted_password = sha1($user['password']);

    	$users = DB::select('select id from users where email = ? AND password = ?', [$user['email'], $encrypted_password]);

    	session(['user_id' => $users[0]->id]);
   	
    	return redirect()->action('homeController@index');
	}
 }
>>>>>>> 723bd7462fb43556cad040e5cbf596ce728794f0
?>