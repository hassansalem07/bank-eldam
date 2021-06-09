<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('phone');
			$table->string('password');
			$table->string('mail');
            $table->string('api_token')->unique;
			$table->date('birth_date');
			$table->date('last_donation_date');
			$table->string('pin_code');
			$table->integer('blood_type_id')->unsigned();
			$table->integer('city_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}
}
