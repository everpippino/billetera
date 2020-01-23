<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billetera extends Model
{
  protected $table = "billetera";

  protected $fillable = [
    'nombre',
    'balance',
    'total_credito'
  ];

  public function users(){
    //Relacion de una billetera a un usuario
    return $this->hasOne('App\User');
  }
}