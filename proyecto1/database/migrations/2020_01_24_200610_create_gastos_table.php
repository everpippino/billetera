<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastos', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('monto');
            $table->date('fecha');
            $table->string('categoria');
            $table->string('descripcion');
            $table->string('foto');
            $table->float('gasto_credito');
            $table->integer('dolar_id');
            $table->integer('categoriaG_id');
            $table->integer('billetera_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gastos');
    }
}
