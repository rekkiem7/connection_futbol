<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTournamentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_tournament', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team_id')->unsigned()->nullable();
            $table->integer('tournament_id')->unsigned()->nullable();
            $table->integer('active')->default(1);
            $table->timestamps();
            $table->foreign('team_id')->references('id')->on('team');
            $table->foreign('tournament_id')->references('id')->on('tournament');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('team_tournament');
    }
}
