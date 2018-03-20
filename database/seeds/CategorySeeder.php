<?php

use Illuminate\Database\Seeder;
class CategorySeeder extends Seeder
{
    public function run()
    {
    	DB::table('categories')->delete();
        DB::table('categories')->insert([
        	'id'=> 1,
			'name' => 'Root',
			'parent' => 0,
			'left' => 0,
			'right' => 1,
            'level' => 0
		]);
    }
}
