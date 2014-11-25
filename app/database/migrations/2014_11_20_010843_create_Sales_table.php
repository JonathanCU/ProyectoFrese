<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->float('cantidad_kg');
			$table->float('precio_producto');
			$table->integer('id_user')->unsigned();
			$table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
			$table->integer('id_client')->unsigned();
			$table->foreign('id_client')->references('id')->on('clients')->onDelete('cascade');
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
		Schema::drop('sales');
	}

}
