<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('facebook_id')->unique()->nullable();
            $table->string('name');
            $table->string('lastname');
            $table->string('rut')->unique();
            $table->string('name_user')->unique();
            $table->string('email');
            $table->string('cellphone');
            $table->string('password');
            $table->longText('image')->nullable();
            $table->integer('role_id')->unsigned()->nullable();
            $table->integer('active');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('role_id')->references('id')->on('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
