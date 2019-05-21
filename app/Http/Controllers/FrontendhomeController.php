<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendhomeController extends Controller
{
   public function home()
   {
   	return view('welcome');
   }

  
}
