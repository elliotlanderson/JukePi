<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangingSongId extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('songs', function($table)
			{
				$table->dropColumn('id');
			});
		Schema::table('songs', function($table)
			{
				$table->integer('id');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::table('songs', function($table)
			{
				$table->dropColumn('id');
			});
		Schema::table('songs', function($table)
			{
				$table->increments('id');
			});
	}

}
