<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function __construct(){
    	$this->middleware('guest',['except' => 'logout']);
    }
    public function logForm(){
    	return view('content.login');
    }

    public function login(){
    	if(!auth()->attempt(request(['username','password']))){
    		return back()->withError(['message'=> 'account not found']);
    	}
    	return redirect()->home();
    }

    public function logout(){

		auth()->logout();

    	return redirect()->home();
    }
}

