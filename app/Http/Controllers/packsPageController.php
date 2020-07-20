<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

 class packsPageController extends Controller
 {
 	 public function show(){
		 	 	
		

 	 	$pack_id = session('packs_id');

 	 	


 	 	$packs= DB::table('packs')
        	->join('user_packs', 'user.id', '=', 'user_packs.user_id')
        	->where('user_packs.pack_id', '=', $pack_id)
        	->select('packs.name', 'packs.description','packs.image') 
        	->get();

    	$view_data['packs_name'] = $packs[0]->name;
    	$view_data['packs_description'] =$packs[0]->description;
    	$view_data['packs_image'] = $packs[0]->image;

    	return view('packs_page', ['view_data' => $view_data]);

 	 	}

 	 }
 
?>

