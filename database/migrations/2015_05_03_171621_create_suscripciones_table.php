<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuscripcionesTable extends Migration {

	public function up()
	{
		Schema::create('suscripciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('correo')->unique();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('suscripciones');
	}

}
