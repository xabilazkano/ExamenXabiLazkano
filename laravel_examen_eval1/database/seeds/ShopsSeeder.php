<?php

use Illuminate\Database\Seeder;

class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
        	'name' => 'MediaMarkt',
        	'description' => 'MediaMarkt de garbera',
        	'password' => 'garbera1234',
        	'email' => 'garbera@mediamarkt.com',
        	'likes' => 3
        ]);

        DB::table('shops')->insert([
        	'name' => 'Zara',
        	'description' => 'Zara de garbera',
        	'password' => 'zara1234',
        	'email' => 'garbera@zara.com',
        	'likes' => 34
        ]);

        DB::table('shops')->insert([
        	'name' => 'Forum Sport',
        	'description' => 'Forum Sport de garbera',
        	'password' => 'forum1234',
        	'email' => 'garbera@forumsport.com',
        	'likes' => 20
        ]);
    }
}
