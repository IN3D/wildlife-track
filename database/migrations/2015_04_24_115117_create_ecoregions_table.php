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
            $table->integer( 'biome_id' )->unsigned()->index();
            $table->foreign( 'biome_id' )->references( 'id' )->on( 'biomes' );
            $table->integer( 'realm_id' )->unsigned()->index();
            $table->foreign( 'realm_id' )->references( 'id' )->on( 'realms' );
            $table->integer( 'global_id' )->unsigned()->index();
            $table->foreign( 'global_id' )->references( 'id' )->on( 'globals' );
            $table->integer( 'conservation_status_id' )->unsigned()->index();
            $table->foreign( 'conservation_status_id' )->references( 'id' )->on( 'conservation_statuses' );
            $table->string( 'code' );
            $table->string( 'name' );
            $table->string( 'area' );
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
