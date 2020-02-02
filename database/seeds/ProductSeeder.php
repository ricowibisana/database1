<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data faker indonesia
        $faker = Faker::create('id_ID');

        // membuat data dummy sebanyak 10 record
        for($x = 1; $x <= 10; $x++){

        	// insert data dummy pegawai dengan faker
        	DB::table('product')->insert([
        		'nama' => $faker->name,
        		'product' => $faker->tld,
        	]);

        }

    }
}