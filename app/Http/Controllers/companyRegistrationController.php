<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

 class CompanyRegistrationController extends Controller
 {
	public function show(){

		return view('company_registration');
	}

	// get user registration
	// validate user user registration
	// successfully register a user
	//		else return error

	public function companyRegistrationForm(Request $request){
		
		$registration = [];
		$registration['name'] = $request->get('name');
		$registration['size'] = $request->get('size');
		$registration['industry'] = $request->get('industry');

		// validate data

		DB::insert('insert into companies (name, size, industry) values (?, ?, ?)', [$registration['name'], $registration['size'], $registration['industry']]);

		return back()->with('success', 'Company Created!');
	}
 }
?>