<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConservationStatusesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conservation_statuses', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer( 'conservation_status' );
            $table->string( 'conservation_status_desc' );
            $table->timestamps();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('conservation_statuses');
	}

}
