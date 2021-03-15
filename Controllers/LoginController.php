<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
	
	public function index()
    {
		// DB::insert('insert into users (name,email,password)
		$users = \App\User::all();
		dd($users);
		
		$users = DB::select('select * from users');
		return $users;
		return view('home');
	

		


	
	}
	
}
