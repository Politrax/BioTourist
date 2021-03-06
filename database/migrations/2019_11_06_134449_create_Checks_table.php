<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChecksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Checks', function(Blueprint $table)
		{
			$table->integer('idCheck', true);
			$table->dateTime('check_prevision_date')->default(null)->nullable();
			$table->string('check_status_verification', 45);
			$table->dateTime('check_date')->default(null)->nullable();
			$table->text('check_comment')->default(null)->nullable();
			$table->integer('check_customer_service')->default(null)->nullable();
			$table->integer('check_state_place')->default(null)->nullable();
			$table->integer('check_quality_product')->default(null)->nullable();
			$table->string('check_bio_status')->default(null)->nullable();
			$table->integer('Users_idUser')->index('fk_Verifications_Users_idx');
			$table->integer('Sellers_idSeller')->index('fk_Verifications_Sellers_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Checks');
	}

}
