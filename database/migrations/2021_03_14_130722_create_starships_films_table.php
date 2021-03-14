<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStarshipsFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('starships_films', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('films_id');
            $table->unsignedBigInteger('starships_id');

            $table->foreign('films_id')->references('id')->on('films')->onDelete('cascade');
            $table->foreign('starships_id')->references('id')->on('starships')->onDelete('cascade');
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
        Schema::dropIfExists('starships_films');
    }
}
