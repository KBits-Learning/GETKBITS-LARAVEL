<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

 class TracksController extends Controller
 {
 	 public function show(){
 	 	
 	 	$view_data = [];

 	 	$tracks_id = session('tracks_id');

 	 	$tracks = DB::select('select name, description, image from tracks where id = ?', [$tracks_id]);

 	 	$view_data['tracks'] = $users[0];

 	 	return view('tracks_home', ['view_data' => $view_data]);
 	 	}

 	 }
?>


