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

 	 	$pack_id = session('pack_id');

 	 	$packs = DB::select('select name, description, image, author_id from packs where id = ?', [$pack_id]);

 	 	$view_data['pack'] = $packs[0];

 	 	track = DB::table('packs')
           ->join('pack_name', 'pack.id', '=', 'pack_name.pack_id')
          here('pack_name.pack_id', '=', $pack_id)
           ->select('pack.name')
           ->get();

        $view_data['pack_name'] = $pack[0]->name;

		return view('packs', ['view_data' => $view_data]);
        

 	 	}

 	 }
 
?>



