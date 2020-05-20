<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('BlockedSeller', function(Blueprint $table)
		{
			$table->integer('idBlockedSeller', true);
			$table->integer('id_user_blocked')->index('fk_Comments_Users1_idx');
			$table->integer('id_user')->index('fk_Comments_Users1_idx');
			$table->text('Comment');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('BlockedSeller');
	}

}
