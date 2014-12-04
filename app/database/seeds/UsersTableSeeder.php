<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
	$users = array(
		['username' => 'Criollo', 'nombre' => 'Jose Eduardo Criollo Cabrera', 'password' => Hash::make('lalo'), 'direccion' => 'Manzana 55 lote 6', 'telefono' => '2431151433', 'email' => 'joseeduardocriollocabrera@gmail.com', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['username' => 'Jhony', 'nombre' => 'Jonathan Cisneros Urbina', 'password' => Hash::make('123'), 'direccion' => 'Cumbres #6 Col. La paz', 'telefono' => '2431131344', 'email' => 'jonathan.cu95@gmail.com', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['username' => 'Javier', 'nombre' => 'Javier Delgado Serrano', 'password' => Hash::make('chocolate'), 'direccion' => 'Emiliano Zapata #7 Magdalena', 'telefono' => '2431131243', 'email' => 'javierdels@gmail.com', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
		DB::table('users')->insert($users);
	}

}