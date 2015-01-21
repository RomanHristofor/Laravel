<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Maintexts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('maintext', function ($table)
        {
          $table->increments('id');
            $table->string('name',60);
            $table->text('body');
            $table->string('url',60);
            $table->enum('showhide',array('show','hide'));
            $table->enum('lang',array('ru','en'));
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
		Schema::drop('maintext');
	}

}
