<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

 class tracksRegistrationController extends Controller
 {
	public function show(){

		return view('tracks_registration');
	}
	public function trackRegistrationForm(Request $request){
		
		$registration= [];
		$registration['name'] = $request->get('name');
		$registration['description'] = $request->get('description');
		$registration['image'] = $request->get('image');
		$registration['url'] = $request->get('url');

		// validate data

		DB::insert('insert into tracks (name,description,image,url) values (?, ?, ?, ?)', [$registration['name'], $registration['description'], $registration['image'] ,$registration['url']]);

		return back()->with('success', 'new track created');
	}
 }
?>
