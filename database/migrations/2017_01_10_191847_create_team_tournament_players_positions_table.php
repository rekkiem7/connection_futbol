<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTournamentPlayersPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_tournament_player_positions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('player_id')->unsigned()->nullable();
            $table->integer('position_id')->unsigned()->nullable();
            $table->integer('active')->default(1);
            $table->timestamps();
            $table->foreign('player_id')->references('id')->on('team_tournament_player');
            $table->foreign('position_id')->references('id')->on('position_player');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('team_tournament_player_positions');
    }
}
