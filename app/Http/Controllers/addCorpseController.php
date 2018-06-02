<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Decease;
use App\User;
use App\Relationship;
use Carbon\Carbon;

class addCorpseController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function view(){
        $cat_rel= Relationship::all();
        return view('content.exp',compact('cat_rel'));
    }
    
    public function add($name,User $user){

        
        if(auth()->user()->role_id !=1){
            if(request()->segment(1) != auth()->user()->username){
                //return Session::flash('404','ACCOUNT NOT FOUND');
                return redirect()->home();
            }else{
            $this->validate(request(),[
                        'firstname' => 'required|min:3|regex:/^[a-zA-z\s]+$/',
                        'middlename' => 'nullable|min:2|regex:/^[a-zA-z\s]+$/',
                        'lastname' => 'required|min:2|regex:/^[a-zA-z\s]+$/',
                        'birthdate' => 'required|date_format:"Y-m-d"|before:deathdate,interment|year_greater_than:1900',
                        'deathdate' => 'required|date_format:"Y-m-d"|after:birthdate|before:interment|year_greater_than:2017',
                        'interment' => 'required|date_format:"Y-m-d"|after:deathdate|year_greater_than:2017'
                    ]);

                $corpse=$user->add(request(['firstname',
                                            'middlename',
                                            'lastname',
                                            'birthdate',
                                            'deathdate',
                                            'interment',
                                            'latitude',
                                            'longtitude']),     
                                            auth()->user()->id,
                                            request(['firstname','middlename','lastname']),
                                            1,
                                            Carbon::now()->toDateString(),
                                            5000.00,
                                            false
                                            );
                return \Response::json($corpse);
            }
            
        }else{

            return redirect()->home();
        }

        
    }
}
