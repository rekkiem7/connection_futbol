<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryLeagueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_league', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('league_id')->unsigned()->nullable();
            $table->integer('order');
            $table->integer('active')->default(1);
            $table->timestamps();
            $table->foreign('league_id')->references('id')->on('league');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('category_league');
    }
}
