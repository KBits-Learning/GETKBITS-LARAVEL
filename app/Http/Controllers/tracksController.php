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

 	 	$track_id = session('track_id');

 	 	$tracks = DB::select('select name, description, image, author_id, url from tracks where id = ?', [$track_id]);

 	 	$view_data['track'] = $tracks[0];

 	 	$track = DB::table('tracks')
            ->join('track_name', 'track.id', '=', 'track_name.track_id')
            ->where('track_name.track_id', '=', $track_id)
            ->select('track.name')
            ->get();

        $view_data['track_name'] = $track[0]->name;

 	 	// write validations, make sure the array size == 1
        return view('tracks', ['view_data' => $view_data]);
 	 	

 	 	}

 	 }
?>


