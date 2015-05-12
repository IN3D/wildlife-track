<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcoregionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ecoregions', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string( 'ecoregion_code' );
            $table->string( 'ecoregion_name' );
            $table->string( 'ecoregion_area' );
            $table->string( 'global200_num' );
            $table->string( 'conservation_status' );
            $table->string( 'realm_code' );
            $table->string( 'mht_code' );
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
		Schema::drop('ecoregions');
	}

}
