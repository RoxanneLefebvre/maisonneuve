<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Etudiants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 50);
            $table->string('adresse');
            $table->string('phone');
            $table->string('email');
            $table->string('dateNaissance');
            $table->integer('ville_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('etudiants', function (Blueprint $table) {

            $table->foreign('ville_id')->references('id')->on('villes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
