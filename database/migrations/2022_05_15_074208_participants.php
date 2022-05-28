<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Participants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('num_passeport');
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naiss');
            $table->string('pays');
            $table->string('tel');
            $table->string('email');
            $table->date('date_inscription');
            $table->string('reference_vehicule');
            $table->string('rang');
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
        //
        Schema::dropIfExists('participants');
    }
}
