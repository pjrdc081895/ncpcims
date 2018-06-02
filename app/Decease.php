<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Decease extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'interment', 'birthdate', 'deathdate','firstname','middlename','lastname'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
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

    public function _user(){
        return $this->belongsToMany(User::class)
        ->withPivot('relationship_id')
        ->withTimestamps();
    }
}
