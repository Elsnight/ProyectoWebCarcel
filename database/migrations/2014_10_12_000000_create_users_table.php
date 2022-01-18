<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            //ID para al tbaal BDD
            $table->id();

            //Columnas para la tabal BDD
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('username', 50);
            $table->string('personal_phone', 10);
            $table->string('home_phone', 9);
            $table->string('address', 50);
            $table->string('password');
            $table->string('state')->default(true);

            //columna que sera unica apra la bdd
            $table->string('email')->unique();

            //columnas que seran y podrann acpetar registros null para la tabla bdd
            $table->date('birthdate')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            
            //columnas especiales para la tabla de la bdd
            $table->rememberToken();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('users');
    }
}
