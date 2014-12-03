<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductionsTableSeeder extends Seeder {

	public function run()
	{
	$productions = array(
		['cantidad'=>125.12,'created_at' => new DateTime, 'updated_at' => new DateTime],
		['cantidad'=>250.28,'created_at' => new DateTime, 'updated_at' => new DateTime],
		['cantidad'=>120.32,'created_at' => new DateTime, 'updated_at' => new DateTime],
		['cantidad'=>350.45,'created_at' => new DateTime, 'updated_at' => new DateTime],
		['cantidad'=>100.52,'created_at' => new DateTime, 'updated_at' => new DateTime],
		['cantidad'=>450.68,'created_at' => new DateTime, 'updated_at' => new DateTime],
		['cantidad'=>190.72,'created_at' => new DateTime, 'updated_at' => new DateTime],
		['cantidad'=>335.86,'created_at' => new DateTime, 'updated_at' => new DateTime],
		['cantidad'=>345.92,'created_at' => new DateTime, 'updated_at' => new DateTime],
		['cantidad'=>100.14,'created_at' => new DateTime, 'updated_at' => new DateTime]);
		DB::table('productions')->insert($productions);	
	}

}