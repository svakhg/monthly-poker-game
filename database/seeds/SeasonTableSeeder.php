<?php

use Illuminate\Database\Seeder;

class SeasonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $season = new App\Season([
			'year' => '2012',
			'drop_count' => 2
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2013',
			'drop_count' => 4
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2014',
			'drop_count' => 4
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2015',
			'drop_count' => 4
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2016',
			'drop_count' => 4
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2017',
			'drop_count' => 4
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2018',
			'drop_count' => 4
		]);
		$season->save();
    }
}
