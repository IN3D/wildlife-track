<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenusesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('genuses', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer( 'family_id' )->unsigned()->index();
            $table->foreign( 'family_id' )->references( 'id' )->on( 'families' );
            $table->string( 'name' );
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
		Schema::drop('genuses');
	}

}
