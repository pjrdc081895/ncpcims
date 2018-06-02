<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Relationship;
use App\Decease;
use App\Payment;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function search(){

			
            admin search for acccounts
    		if(auth()->user()->role_id===1){
    			$message=[];
				$accounts =[];
    			if(Input::get('search')){
		    			if(count(User::search(Input::get('search')))>0){
		    				$accounts = User::search(Input::get('search'));
			    		}
			    		else{
			    			$message = ['noRec'=> 'NO RECORDS FOUND'];
			    		}
    			}
    			return view('content.search',compact('accounts','message'));
    		}else{
    			return redirect()->home();
    		}
    		    	
    }

    public function acctID(User $id){
        return \Response::json($id);
    }

    public function deleteAccount($id){
        $account = User::destroy($id);
        return \Response::json($id);
    }

    public function addRelationship(){
        $this->validate(request(),[
            'description' => 'required|min:3|regex:/^[a-zA-z]+$/'
            ]);

        $relationship = Relationship::create(request(['description']));

        return \Response::json($relationship);
    }

    public function confirmation($dID){
        //$dec_info = 
        $dec = Decease::with('_user')->get();
        return view('content.confirmation',compact('dec'));
    }

    public function confirm(Request $request,$dcID){
        $this->validate(request(),[
            'latitude' => 'required',
            'longtitude' => 'required'
            ]);

        $dcs = Decease::find($dcID);
        $dcs -> latitude = $request->get('latitude');
        $dcs -> longtitude = $request->get('longtitude');
        $dcs -> save();

        $pmt = Payment::where('user_id',$request->get('users_id'))->first();
        $pmt -> payment_status = "true";
        $pmt -> save();

        return redirect('/');
    }

    public function viewrel(){
        $rel_cat = Relationship::all();
        return view('content.relationships',compact('rel_cat'));
    }

    public function relDESC(Relationship $id){
        return \Response::json($id);
    }

    public function approveReq(){
        $req = \DB::table('decease_user')
            ->selectRaw('deceases.firstname,deceases.middlename,deceases.lastname,users.id,decease_user.decease_id')
            ->join('deceases','deceases.id','=','decease_user.decease_id')
            ->join('payments','payments.user_id','=','decease_user.user_id')
            ->join('users','users.id','=','decease_user.user_id')
            ->where('payments.payment_status','=',false)
            ->get();

        return view('content.requests',compact('req'));
    }
}
