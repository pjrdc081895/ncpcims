<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Decease;
use Carbon\Carbon;

class SearchController extends Controller
{
    public function search(){

    	

    		$message=[];
			$decease =[];
            $infocorpse=[];

    		if(Input::get('searchcorpse')){
    			if(count(Decease::searchCname(Input::get('searchcorpse')))>0){
    				$decease = Decease::searchCname(Input::get('searchcorpse'));
	    		}
	    		else{
	    			$message = ['noRec'=> 'NO RECORDS FOUND'];
	    		}
    		}
            

    		
    	return view('content.corpse',compact('decease','message','infocorpse'));
    }

    public function searchById(Decease $id){
        $corpse=Decease::Select('*')
                    ->where('id',$id)
                    ->get();
        return \Response::json($id);
    }
    public function maps(){
        return view('content.maps');
    }

    public function dashboard(){
        return view('dashboard');
    }
    public function searchAll($prm){
        $req = \DB::table('decease_user')
            ->selectRaw('deceases.firstname,deceases.middlename,deceases.lastname,users.id,decease_user.decease_id')
            ->join('deceases','deceases.id','=','decease_user.decease_id')
            ->join('payments','payments.user_id','=','decease_user.user_id')
            ->join('users','users.id','=','decease_user.user_id')
            ->where('payments.payment_status','=',false)
            ->get();
            
         $prm = Decease::where(function ($query) use ($prm) {
                            $query->where('firstname','LIKE', "%$prm%")
                                  ->orWhere('middlename','LIKE', "%$prm%")
                                  ->orWhere('lastname','LIKE', "%$prm%");
                            })->get();
        return \Response::json($prm);
    }
}
