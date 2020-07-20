<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

 class packsController extends Controller
 {
 	 public function show(){

 	 	
 	 	
$view_data = [];

 	 	$packs_id = session('packs_id');

 	 	$packs = DB::select('select name, description, image from tracks where id = ?', [$packs_id]);

 	 	$view_data['packs'] = $users[0];

 	 	return view('packs_home', ['view_data' => $view_data]);
 	 	

 	 	}

 	 }
 
?>



