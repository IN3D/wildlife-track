<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcoregionSpeciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ecoregion_species', function(Blueprint $table)
		{
            $table->integer( 'ecoregion_id' )->unsigned()->index();
            $table->foreign( 'ecoregion_id' )->references( 'id' )->on( 'ecoregions' );
            $table->integer( 'species_id' )->unsigned()->index();
            $table->foreign( 'species_id' )->references( 'id' )->on( 'species' );
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ecoregion_species');
	}

}
