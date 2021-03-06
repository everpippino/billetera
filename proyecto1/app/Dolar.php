<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dolar extends Model
{
  protected $table = "dolar";

  protected $fillable = [
    'precio',
    'fecha',
  ];

  public function billetera(){
    //Relacion de un dolar con una billetera
    return $this->hasOne('App\Billetera');
  }
}