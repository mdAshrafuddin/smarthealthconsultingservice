<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorsController extends Controller
{
     public function doctors()
    {
    	return view('doctors');
    }
}
