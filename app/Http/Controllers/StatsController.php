<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Decease;
use Carbon\Carbon;

class StatsController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function view(){

    	return view('content.stats');
    }

    public function date($month,$date,$year){

    	
    	//return view('content.stats',compact('statistics'));
	 }

    public function statistics(){
        $statistics = Decease::with('_user');

        if($month = request('mon')){
            $statistics->whereMonth('birthdate',Carbon::parse($month)->month);
        }
                              
         if($day = request('day')){
            $statistics->whereDay('birthdate',$day);
        }
         if($year = request('year')){
            $statistics->whereYear('birthdate',$year);
        }                     
                          
        $statistics = $statistics->get();
        
        $stats = Decease::selectRaw("to_char(birthdate,'FMMonth') mon, date_part('day',birthdate) dt, date_part('year',birthdate) yr, count(*) count")
                         ->groupBy('mon','dt','yr')
                         ->orderByRaw('min(birthdate) asc')->get();

    	return view('content.stats',compact('stats','statistics'));
    }
}
