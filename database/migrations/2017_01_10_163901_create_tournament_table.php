<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('league_id')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('formatTournament_id')->unsigned()->nullable();
            $table->integer('year');
            $table->integer('active')->default(1);
            $table->timestamps();
            $table->foreign('league_id')->references('id')->on('league');
            $table->foreign('category_id')->references('id')->on('category_league');
            $table->foreign('formatTournament_id')->references('id')->on('format_tournament');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tournament');
    }
}
