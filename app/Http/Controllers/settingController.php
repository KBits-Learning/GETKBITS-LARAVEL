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

 	 	$company = DB::table('companies')
            ->join('company_users', 'companies.id', '=', 'company_users.company_id')
            ->where('company_users.user_id', '=', $user_id)
            ->select('companies.name')
            ->get();

            //new memeber
        $new_member = [];
		$new_member['email'] = $request->get('email');
		

		   //validate data

	
		DB::insert('insert into users (email) values (?)', $registration['email'], $encrypted_password]);

		return back()->with('success', 'INVITACION SENT');

	}
}
?>



 	 	

