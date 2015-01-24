<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('users', function ($table){
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password',60);
            $table->string('username')->unique();
            $table->boolean('isAdmin');
            $table->boolean('isActive');
            $table->rememberToken();
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
		Schema::drop('users');
	}

}
