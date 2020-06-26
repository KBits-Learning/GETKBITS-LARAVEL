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

	public function checkCredentials(Request $request){
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


//log in to home page 
return redirect('homeController@index'); 


	//user credentials 
	public function checkCredentials (Request $request) {
		
		$user = [];
		$user['email'] = $request->get('email');
		$user['password'] = $request->get('password');
		$encrypted_password = sha1($user['password']);

		//user validation 
		$users = DB::select('select id from users where email = ? AND  password = ?', [$user['email'], $encrypted_password]);
		session(['user_id' => $users[0]->id]);

		//wrong user messege
		if(!$users[0]) return back()->with('status','Somthing is wrong', 'Check your email and password');

		//log in to home page 
		return redirect()->action('HomeController@index');

	}
 }
?>