<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GallaryController extends Controller
{
   public function gallary($value='')
   {
   		return view('gallary');
   }
}
