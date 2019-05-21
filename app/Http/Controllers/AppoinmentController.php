<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appoinment;

class AppoinmentController extends Controller
{
	public function index($id)
    {
    	$appoinments = Appoinment::find($id);
    	return view('appoinmentshow',compact('appoinments'));
    }


    public function appoinment()
    {
    	
    	return view('appoinment');
    }



    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Appoinment
     */
    protected function create(Request $request)
    {
        $appoinments = new Appoinment();

        $appoinments->name = $request->name;
        $appoinments->email = $request->email;
		$appoinments->password = $request->password;
		$appoinments->phone = $request->phone;
		$appoinments->enter_area = $request->enter_area;
	    $appoinments->enter_city = $request->enter_city;
	    $appoinments->enter_state = $request->enter_state;
		$appoinments->post_code = $request->post_code;
		// $appoinments->appoinment_date = $request->appoinment_date;


        $appoinments->save();

        session()->flash('success', 'Appoinments was successful!');
        return redirect()->route('index');
    }
}
