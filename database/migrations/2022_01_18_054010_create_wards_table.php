<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wards', function (Blueprint $table) {

            //ID parta la tabal BDD
            $table->id();

            //columnas apra la tabla BDD
            $table->string('name',45);
            $table->string('location',45);
            $table->boolean('state')->default(true);

            //columnas que seran podran aceptar registros null para la tabal BDD
            $table->string('description')->nullable();
            
            //Columnas especiales apra la tabla BDD
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
        Schema::dropIfExists('wards');
    }
}
