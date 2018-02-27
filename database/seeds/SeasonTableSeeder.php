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
			'game_count' => 22,
			'drop_count' => 2,
			'player_count_id' => 14,
			'buy_in_id' => 7
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2013',
			'game_count' => 20,
			'drop_count' => 4,
			'player_count_id' => 10,
			'buy_in_id' => 7
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2014',
			'game_count' => 20,
			'drop_count' => 4,
			'player_count_id' => 11,
			'buy_in_id' => 7
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2015',
			'game_count' => 20,
			'drop_count' => 4,
			'player_count_id' => 10,
			'buy_in_id' => 7
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2016',
			'game_count' => 20,
			'drop_count' => 4,
			'player_count_id' => 12,
			'buy_in_id' => 7
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2017',
			'game_count' => 20,
			'drop_count' => 4,
			'player_count_id' => 11,
			'buy_in_id' => 7
		]);
		$season->save();
		
		$season = new App\Season([
			'year' => '2018',
			'game_count' => 20,
			'drop_count' => 4,
			'player_count_id' => 13,
			'buy_in_id' => 7
		]);
		$season->save();
    }
}
