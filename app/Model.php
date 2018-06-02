<?php

namespace App;

use Illuminate\Database\Eloquent\Model as eloquent;

class Model extends eloquent
{
  	
  	protected $fillable = [
        'firstname', 'middlename', 'lastname','birthdate','deathdate'
    ];
     protected $hidden = [
        'remember_token',
    ];

}
