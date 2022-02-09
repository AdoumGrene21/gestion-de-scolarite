<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNiveauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('niveaux', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            // $table->string('parcour_id');
            $table->timestamps();
            // $table->foreignId('parcour_id')->constrained();
             $table->unsignedBigInteger('parcour_id');

            // $table->foreign('parcour_id')->references('id')->on('parcours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('niveaux');
    }
}
