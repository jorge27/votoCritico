<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::defaultStringLength(191);
        Schema::create('users', function (Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->string('email')->unique();
            $table->string('passwd');
            $table->integer('user_permission');
            $table->rememberToken();
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('users');
    }
}
