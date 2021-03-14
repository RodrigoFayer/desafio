<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanetsFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planets_films', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('films_id');
            $table->unsignedBigInteger('planets_id');

            $table->foreign('planets_id')->references('id')->on('planets')->onDelete('cascade');
            $table->foreign('films_id')->references('id')->on('films')->onDelete('cascade');
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
        Schema::dropIfExists('planets_films');
    }
}
