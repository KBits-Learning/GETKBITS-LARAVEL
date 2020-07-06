<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

 class packRegistrationController extends Controller
 {
	public function show(){

		return view('packs_registration');
	}


	public function packRegistrationForm(Request $request){
		
		$registration = [];
		$registration['name'] = $request->get('name');
		$registration['description'] = $request->get('description');
		$registration['image'] = $request->get('image');
		$registration['author_id'] = $request->get('author_id');

		// validate data

		DB::insert('insert into packs (name, description,image,author_id ) values (?, ?, ?, ?)', [$registration['name'], $registration['description'], $registration['image'] ,$registration['author_id']]);

		return back()->with('success', 'new pack created');

	}
 }
?>



