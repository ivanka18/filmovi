<?php

use Illuminate\Database\Seeder;

class filmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$i=0;
		while ($i < 50)
		{
			DB::table('films')->insert([
				'naziv' => str_random(10),
				'godina' => date('Y-m-d'),
				'trajanje' => rand(30,320)
			]);
			$i++;
		}
    }
}
