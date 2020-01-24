<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gastos extends Model
{
  protected $table = "gastos";

  protected $fillable = [
    'monto',
    'fecha',
    'categoria',
    'descripcion',
    'foto',
    'gasto_credito'
  ];

  public function billetera(){
    //Relacion de una billetera a un usuario
    return $this->belongsTo('App\Billetera');
  }
  public function dolar(){
    //Relacion de una billetera a un usuario
    return $this->hasOne('App\Dolar');
  }
}