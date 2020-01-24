<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
  protected $table = "ingreso";

  protected $fillable = [
    'monto',
    'fecha',
    'descripcion',
    'foto'
  ];

  public function billetera(){
    //Relacion de una billetera a un ingreso
    return $this->belongsTo('App\Billetera');
  }
  public function dolar(){
    //Relacion de un dolar con un ingreso
    return $this->hasOne('App\Dolar');
  }
  public function categoriaI(){
    //Relacion de una categoriaI a un ingreso
    return $this->belongsTo('App\CategoriaI');
  }
}