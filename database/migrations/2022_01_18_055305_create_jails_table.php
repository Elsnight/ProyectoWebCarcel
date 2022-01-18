<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jails', function (Blueprint $table) {
            
            //ID para la tabla BDD
            $table->id();

            //columnas para la tabla BDD
            $table->string('name',45);
            $table->string('code');
            $table->enum('type',['low','medium'.'high']);
            $table->unsignedBigInteger('capacity');
            $table->boolean('state')->default(true);

            //Relacion
            $table->unsignedBigInteger('ward_id');
            //Un pabellonn puede tener muchas carceles y una carcel le pertenece a un pabellon
            $table->foreign('ward_id')
               ->references('id')
               ->on('wards')
               ->onDelete('cascade')
               ->onUpdate('cascade');
            
           //columnas que podran aceptar registros null para la tabla BDD
           $table->string('description')->nullable();

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
        Schema::dropIfExists('jails');
    }
}
