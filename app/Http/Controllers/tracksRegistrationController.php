<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

 class trackRegistrationController extends Controller
 {
	public function show(){

		return view('track_registration');
	}
	public function trackRegistrationForm(Request $request){
		
		$registration = [];
		$registration['name'] = $request->get('name');
		$registration['description'] = $request->get('description');
		$registration['image'] = $request->get('image');
		$registration['author_id'] = $request->get('author_id');

		// validate data

		DB::insert('insert into tracks (name, description,image,author_id ) values (?, ?, ?, ?)', [$registration['name'], $registration['description'], $registration['image'] ,$registration['author_id']]);

		return back()->with('success', 'new track created');
	}
 }
?>
