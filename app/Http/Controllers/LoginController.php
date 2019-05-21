<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
     public function user_login()
    {
    	
    	return view('login');
    }

 //    public function login(Request $request){

	// 	// if ($request->isMethod('post')){

	// 	// 	$data = $request->all();

	// 	// 	if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {

	// 	// 		// Session::put('frontSession',$data['email']);

	// 	// 		return redirect()->route('index');
	// 	// 	}else{
	// 	// 		redirect()->back()->with('flash_message_error', 'Invalid Username or Password');
	// 	// 	}

	// 	// }

	// }
}
