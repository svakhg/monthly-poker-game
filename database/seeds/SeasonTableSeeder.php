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
			'year' => '2012'
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2013'
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2014'
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2015'
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2016'
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2017'
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2018'
		]);
		$season->save();
    }
}
