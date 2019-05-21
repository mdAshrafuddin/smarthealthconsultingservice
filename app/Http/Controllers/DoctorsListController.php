<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorsListController extends Controller
{
    public function doctorslist()
    {
    	return view('medicine.doctorslist.doctorslist');
    }
}
