<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria_g extends Model
{
  protected $table = "categoria_g";

  protected $fillable = [
    'nombre',
    'descripcion',
  ];

  public function gastos(){
    //Relacion de muchos gastos a una categoria_g
    return $this->hasMany('App\Gastos');
  }
}