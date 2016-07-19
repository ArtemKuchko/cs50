<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    //
	public function index()
	{
		 //$lists = array('Vacation Planning', 'Grocery Shopping', 'Camping Trip');
		 $lists = null;
		 return view('welcome')->with('lists', $lists);
	}
		
}
