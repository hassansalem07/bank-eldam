<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('settings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('notification_settings');
			$table->text('about_app');
			$table->string('phone');
			$table->string('mail');
			$table->string('fb_link');
			$table->string('tw_link');
			$table->string('youtube_link');
			$table->string('insta_link');
			$table->string('whatsapp_link');
			$table->string('google_link');
		});
	}

	public function down()
	{
		Schema::drop('settings');
	}
}