<?php

namespace App;

class Corpse extends Model
{
  	
  	public static function searchCname($corpsename){
  		 return static::Select('*')
                    ->where('firstname',$corpsename)
                    ->get();
  	}

  	public static function searchbyCId($id){
  		 return static::Select('*')
                    ->where('id',$id)
                    ->get();
  	}
    
    public function user(){
        return $this->belongsTo(User::class);
    }


}
