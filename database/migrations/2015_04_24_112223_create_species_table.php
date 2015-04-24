<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('species', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer( 'genus_id' )->unsigned()->index();
            $table->foreign( 'genus_id' )->references( 'id' )->on( 'genuses' );
            $table->string( 'name' );
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('species');
	}

}
