<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorreosTable extends Migration {

	public function up()
	{
		Schema::create('correos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('correo')->unique();
			$table->string('correo')->unique();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('correos');
	}

}
