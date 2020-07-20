<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

 class tracksPageController extends Controller
 {
 	 public function show(){
 	 	
 	 	$track_id = session('tracks_id');

 	 	$tracks = DB::table('tracks')
 	 		->join('users_tracks', 'user.id', '=', 'users_tracks.user_id') 
 	 		->where('users_tracks.tracks_id', '=' $tracks_id)
 	 		->select('tracks.name', 'tracks.description', 'tracks.image', 'tracks.url')
 	 		->get();

 	 		$view_data['tracks_name'] = $tracks[0]->name;
 	 		$view_data['tracks_description'] =  $tracks[0]->description;
 	 		$view_data['tracks_image']  = $tracks[0]->image;
 	 		$view_data['tracks_url'] = $tracks[0]->url;

 	 		return view('home', ['view_data'=>$view_data]);

 	 	}

 	 }
 
?>