<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('matricule')->unique();
            $table->string('civilite');
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->string('nationnalite');
            $table->foreignId('tuteur_id')->constrained();
            $table->unsignedBigInteger('classe_id');
            // $table->foreignId('classe_id')->constrained();
            $table->timestamps();


            // $table->unsignedBigInteger('classe_id');

            // $table->foreign('classe_id')->references('id')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eleves');
    }
}
