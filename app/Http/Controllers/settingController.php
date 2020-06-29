<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

 class HomeController extends Controller
 {
 	 public function index(){

 	 	$view_data = [];

 	 	$user_id = session('user_id');

 	 	$users = DB::select('select first_name, last_name, title, profile_img from users where id = ?', [$user_id]);

 	 	$view_data['user'] = $users[0];