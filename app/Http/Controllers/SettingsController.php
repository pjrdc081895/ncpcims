<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SettingsController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function account(){
    	return view('content.settings');
    }

    public function updateAccount($id){

    	$this->validate(request(),[
    		'password' => 'required|min:3|confirmed'
    		]);

    	//store registration info
    	$account = User::find($id);
    	$account -> username = request('username');
    	$account -> email = request('email');
    	$account -> password = \Hash::make(request('password'));
    	$account -> save();

    	return \Response::json($account);


    }
}
