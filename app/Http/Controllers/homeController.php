<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

 class LoginController extends Controller
 {
 	 public function show(){

 	 	$idusuario = '';
    	$NombreC = '';
    	$company = '';

    	$users = DB::select('select idusuario,NombreC,company  from usuario where idusuario = ? ', [$idusuario, $NombreC,$company 1]);

        return view('home');
        var_dump($user);
 	 }
 }
?>