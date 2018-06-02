<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    //
    public function __construct(){
        $this->middleware('guest');
    }   
    public function regForm(){
    	$uCount = User::all()->count();
        if($uCount===0){
            session(['role_type' => '1']);
            return view('content.register');
        }else{
            session(['role_type' => '2']);
            return view('content.register');
        }
    }

    public function register(){
    	
    	//validate registration info
    	$this->validate(request(),[
           'role_id' => 'required|integer',
            'firstname' => 'required|min:3|regex:/^[a-zA-z\s]+$/',
            'middlename' => 'nullable|min:2|regex:/^[a-zA-z\s]+$/',
            'lastname' => 'required|min:3|regex:/^[a-zA-z\s]+$/',
            'username' => 'required|min:3|regex:/^[a-zA-z0-9_]+$/',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3|confirmed'
    		]);

    	//store registration info
    	$user = User::create([
              'firstname' => request('firstname'),
            'middlename' => request('middlename'),
            'lastname' => request('lastname'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => \Hash::make(request('password')),
            'role_id' => request('role_id')
    		]);

        auth()->login($user);

    	return \Response::json($user);
       
        
    }
}
