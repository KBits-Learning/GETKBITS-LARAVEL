<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

 class UserRegistrationController extends Controller
 {
	public function show(){

		return view('user_registration');
	}

	// get user registration
	// validate user user registration
	// successfully register a user
	//		else return error

	public function userRegistrationForm(Request $request){
		$registration = [];
		$registration['first_name'] = $request->get('first_name');
		$registration['last_name'] = $request->get('last_name');
		$registration['email'] = $request->get('email');
		$registration['password'] = $request->get('password');

		// validate data

		$encrypted_password = sha1($registration['password']);

		DB::insert('insert into users (first_name, last_name, email, password) values (?, ?, ?, ?)', [$registration['first_name'], $registration['last_name'], $registration['email'], $encrypted_password]);

		return back()->with('success', 'User successfully registered!');
	}
 }
?>