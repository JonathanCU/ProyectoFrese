<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SalesTableSeeder extends Seeder {

	public function run()
	{
	$sales = array(
		['cantidad_kg'=>120, 'precio_producto'=>6000, 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['cantidad_kg'=>120, 'precio_producto'=>6000, 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['cantidad_kg'=>120, 'precio_producto'=>6000, 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['cantidad_kg'=>120, 'precio_producto'=>6000, 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['cantidad_kg'=>120, 'precio_producto'=>6000, 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['cantidad_kg'=>120, 'precio_producto'=>6000, 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['cantidad_kg'=>120, 'precio_producto'=>6000, 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['cantidad_kg'=>120, 'precio_producto'=>6000, 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['cantidad_kg'=>120, 'precio_producto'=>6000, 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['cantidad_kg'=>120, 'precio_producto'=>6000, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
		DB::table('sales')->insert($sales);	
	}

}