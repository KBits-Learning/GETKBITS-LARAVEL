<?php
namespace app\Http\controllers;

use App\Http\controllers\controllers;
use App\User;
use Illuminate\support\Facades\DB;


class LoginController extends Controller

/**
*show login 
*muestra login
*@return View
*/
public function show()
{
    $email ='';
    $password='';
    $password_encrypted = sha1($password);
    
	$users = DB::select('select * from usuarios where email = ? and password = ? and Estado = ?', [$email,$password_encrypted, 1]);

    var_dump($users);
    die();

    return View('login',['users'0 => $users]);
}

?>