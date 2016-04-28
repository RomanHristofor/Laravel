<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Callme extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('callme', function ($table){
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('phone',60);
            //$table->string('password',60);
            $table->string('username')->unique();
            //$table->boolean('isAdmin');
            //$table->boolean('isActive');

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
		Schema::drop('callme');
	}

}
