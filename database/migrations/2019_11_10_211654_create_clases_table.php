<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre_clase');
            $table->integer('orden');
            $table->time('horario');
            $table->integer('curso_id')->unsigned();
            $table->foreign('curso_id') ->references('id')->on('cursos')->onDelete('cascade');
            $table->integer('estado');
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
        Schema::dropIfExists('clases');
    }
}
