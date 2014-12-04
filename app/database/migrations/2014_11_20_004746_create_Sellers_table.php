
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSellersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*Schema::create('sellers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->String('nombre', 100);
			$table->String('direccion', 150);
			$table->String('telefono', 12);
			$table->String('correo_electronico', 50);
			$table->timestamps();

			});*/
			Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->String('username', 100);
			$table->String('nombre', 100);
			$table->String('password');
			$table->String('direccion', 150);
			$table->String('telefono', 12);
			$table->String('email', 100);
			$table->rememberToken();
			$table->timestamps();
		});

			Schema::create('clients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->String('nombre', 100);
			$table->String('direccion', 150);
			$table->String('telefono', 12);
			$table->String('email', 50);
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
		Schema::drop('users');
		Schema::drop('clients');
	}

}
