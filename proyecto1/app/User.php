<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'perfil_id', 'billetera_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function perfil(){
        //Relacion de muchos usuarios de un perfil
        return $this->belongsTo('App\Perfil');
      }
      public function billetera(){
        //Relacion de un usuario a una billetera
        return $this->hasOne('App\Billetera');
      }
}
