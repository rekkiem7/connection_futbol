<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTournamentPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_tournament_player', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teamTournament_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('lastname');
            $table->integer('number');
            $table->integer('active')->default(1);
            $table->timestamps();
            $table->foreign('teamTournament_id')->references('id')->on('team_tournament');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('team_tournament_player');
    }
}
