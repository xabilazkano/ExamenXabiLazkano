<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'name' => 'Ps4',
        	'description' => 'Play Station 4',
        	'stock' => 10,
        	'price' =>200,
            'shop_id' => 1
        ]);

        DB::table('products')->insert([
        	'name' => 'Xbox One',
        	'description' => 'Microsoft XboxOne',
        	'stock' => 30,
        	'price' =>299.9,
            'shop_id' => 1
        ]);

        DB::table('products')->insert([
        	'name' => 'Camiseta roja',
        	'description' => 'Camiseta de algodon roja',
        	'stock' => 15,
        	'price' =>10.9,
            'shop_id' => 2
        ]);

        DB::table('products')->insert([
        	'name' => 'Camiseta azul',
        	'description' => 'Camiseta de algodon azul',
        	'stock' => 210,
        	'price' =>23,
            'shop_id' => 2
        ]);

        DB::table('products')->insert([
        	'name' => 'Camiseta verde',
        	'description' => 'Camiseta de algodon verde',
        	'stock' => 16,
        	'price' =>19.2,
            'shop_id' => 2
        ]);

        DB::table('products')->insert([
        	'name' => 'Camiseta negra',
        	'description' => 'Camiseta de algodon negra',
        	'stock' => 4,
        	'price' =>20,
            'shop_id' => 2
        ]);

        DB::table('products')->insert([
        	'name' => 'Camiseta blanca',
        	'description' => 'Camiseta de algodon blanca',
        	'stock' => 134,
        	'price' =>10.1,
            'shop_id' => 3
        ]);

        DB::table('products')->insert([
        	'name' => 'Camiseta morada',
        	'description' => 'Camiseta de algodon morada',
        	'stock' => 10,
        	'price' =>20,
            'shop_id' => 3
        ]);

        DB::table('products')->insert([
        	'name' => 'Camiseta rosa',
        	'description' => 'Camiseta de algodon rosa',
        	'stock' => 1,
        	'price' =>7,
            'shop_id' => 3
        ]);

        DB::table('products')->insert([
        	'name' => 'Camiseta amarilla',
        	'description' => 'Camiseta de algodon amarilla',
        	'stock' => 500,
        	'price' => 0.3,
            'shop_id' => 3
        ]);
    }
}
