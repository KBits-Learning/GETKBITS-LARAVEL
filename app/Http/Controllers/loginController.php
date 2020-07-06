<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

 class LoginController extends Controller
 {
 	public function show(){
 		return view('login');
 	}
 	public function checkCredentials(Request $request){

 	//user credatials
 	$user = [];
    $user['email'] = $request->get('email');
    $user['password'] = $request->get('password');
    $encrypted_password = sha1($user['password']);
    //user validation

    $users = DB::select('select id from users where email = ? AND  password = ?', [$user['email'], $encrypted_password]);
    //var_dump($user);
    //var_dump($users);
    //die();
    session (['user_id' => $users[0]->id]);
    //login to home 

          return redirect()->action('homeController@index');
         
 	}
}
?>