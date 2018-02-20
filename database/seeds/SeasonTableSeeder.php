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
			'drop_count' => 2,
			'player_count_id' => 14,
			'buy_in_id' => 7
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2013',
			'drop_count' => 4,
			'player_count_id' => 10,
			'buy_in_id' => 7
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2014',
			'drop_count' => 4,
			'player_count_id' => 11,
			'buy_in_id' => 7
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
