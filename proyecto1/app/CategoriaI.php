<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaI extends Model
{
  protected $table = "categoriaI";

  protected $fillable = [
    'nombre',
    'descripcion',
  ];

  public function ingreso(){
    //Relacion de un ingreso con una categoriaI
    return $this->hasMany('App\Ingreso');
  }
}