<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ClientsTableSeeder extends Seeder {

	public function run()
	{
		$clients = array(
		['nombre'=>'Joel Criollo Aguilar', 'direccion'=>'Manzana 55 Lote 6 Col. RJ', 'telefono'=>'2431031901', 'email'=>'joel10criollo@hotmail.com', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['nombre'=>'Alfredo Rosas Aguirre', 'direccion'=>'Colonia la paz #34', 'telefono'=>'2441028540', 'email'=>'alfredoRA@hotmail.com', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['nombre'=>'Noel Galindo Gutierrez', 'direccion'=>'Colonia centro #23', 'telefono'=>'2441001701', 'email'=>'GalindoOso@hotmail.com', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['nombre'=>'Aime Bravo Bravo', 'direccion'=>'Atencingo col. la paz #35', 'telefono'=>'2431067236', 'email'=>'gueritaBonita@hotmail.com', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['nombre'=>'Ischel Carranza Bravo', 'direccion'=>'col. cruz verde #12', 'telefono'=>'2441561101', 'email'=>'IschCa3@hotmail.com', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['nombre'=>'Paulina Nestor Espinoza', 'direccion'=>'Barrio la magdalena #21', 'telefono'=>'2441082309', 'email'=>'pauEspi23@hotmail.com', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['nombre'=>'Edwin Diaz Alvarado', 'direccion'=>'Barrio la asuncion #14', 'telefono'=>'2441072106', 'email'=>'Edwin21@hotmail.com', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['nombre'=>'Leobardo Manjarez Enriquez', 'direccion'=>'Colonia centro #24 ', 'telefono'=>'2432002319', 'email'=>'RezMan24@hotmail.com', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['nombre'=>'Meltabeth Paz Rosas', 'direccion'=>'Barrio de Sanbernardino calle 16 de mayo', 'telefono'=>'2443091209', 'email'=>'MeltaPaz16@hotmail.com', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['nombre'=>'Paty Mendoza Mendoza', 'direccion'=>'Atencingo col. la paz #34', 'telefono'=>'2445003213', 'email'=>'MendozaPaty34@hotmail.com', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
		DB::table('clients')->insert($clients);
	}

}