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

  public function users(){
    //Relacion de muchos usuarios de un perfil
    return $this->hasMany('App\Gastos');
  }
}