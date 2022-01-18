<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_ward', function (Blueprint $table) {
             //ID parta la tabal BDD
             $table->id();

             //columnas apra la tabla BDD
             $table->unsignedBigInteger('user_id');
             $table->unsignedBigInteger('ward_id');
             $table->boolean('state')->default(true);
 
             //Relacion
             //Un usuario puede estar en varios pabellones y un pabellon puede tener muchos usuarios
             $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
             
            //Un usuario puede estar en varios pabellones y un pabellon puede tener muchos usuarios
            $table->foreign('ward_id')
                ->references('id')
                ->on('wards')
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
        Schema::dropIfExists('user_ward');
    }
}
