<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
		Factory(App\Product::class,5)->create();	
    }
}
