<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            
            //ID para la tabla BDD
            $table->id();

            //columnas para la tabla BDD
            $table->string('title');
            $table->string('description');
            $table->boolean('state')->default(true);

            //Relacion
            $table->unsignedBigInteger('user_id');

            //Un usuario puede realziar muchos reportes y un reporte le pertenece a un usuario
            $table->foreign('user_id')
               ->references('id')
               ->on('users')
               ->onDelete('cascade')
               ->onUpdate('cascade');
            
            //Columnas especiales para la tabla BDD
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
        Schema::dropIfExists('reports');
    }
}
