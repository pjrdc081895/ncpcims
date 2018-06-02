<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class WelcomeController extends Controller
{
    //
    public function homePage(){

    	$uCount = User::all()->count();
    	if($uCount===0){
    		return redirect('/register');
    	}
    	else{
    		return view('home');
    	}
    }
}
