<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('nombre_actividad');
            $table->text('archivo');
            $table->String('categoria');
            $table->integer('tiempo');
            $table->integer('orden');
            $table->integer('estado');
            $table->integer('clase_id')->unsigned();
            $table->foreign('clase_id') ->references('id')->on('clases')->onDelete('cascade');
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
        Schema::dropIfExists('actividades');
    }
}
