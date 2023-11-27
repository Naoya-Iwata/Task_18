<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ImagesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//
		DB::table('images')->insert([
			'name' => 'no-image.jpg',
			'path' => 'public/no-image.jpg',
		]);
	}
}
