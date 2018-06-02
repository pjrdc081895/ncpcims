<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Decease;
use App\Payment;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','firstname','middlename','lastname','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function search($search){
        return static::Select('*')
                    ->whereRaw("date_part('year', created_at) =".$search)
                    ->orderBy('created_at','desc')
                    ->get();           
    }
    public function decease(){
        return $this->hasMany(Decease::class);
    }
    public function _add(Decease $decease){
      $this->decease()->save($decease);
    }

    public function roles(){
        return $this->belongsTo(Roles::class);
    }

     public function _decease(){
        return $this->belongsToMany(Decease::class)
        ->withPivot('relationship_id')
        ->withTimestamps();
    }
     public function add($decease,$uID,$dec,$rel,$dt,$amt,$stat){
        Decease::create($decease);
        
        $user = User::find($uID);
        $dec = Decease::where('firstname',$dec['firstname'])
                            ->where('middlename',$dec['middlename'])
                            ->where('lastname',$dec['lastname'])
                            ->get();
        $user->_decease()->attach($dec,['relationship_id' => $rel ]);
        
        //payment insertion
        Payment::create([
                    'user_id' => $uID,
                    'date' => $dt,
                    'amount' => $amt,
                    'payment_status' => $stat
            ]);

    }
}
