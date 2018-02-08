<?php

use Illuminate\Database\Seeder;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$game = new App\Game([
			'game_type_id' => '1',
			'game_weight_id' => '1',
			'meet_id' => '1'
		]);
		$game->save();
		
		$game = new App\Game([
			'game_type_id' => '2',
			'game_weight_id' => '1',
			'meet_id' => '1'
		]);
		$game->save();
		/*
		$game = new App\Game([
			'game_type_id' => '1',
			'game_weight_id' => '3',
			'meet_id' => '1'
		]);
		$game->save();
		
        $game = new App\Game([
			'game_type_id' => '1',
			'game_weight_id' => '1',
			'meet_id' => '2'
		]);
		$game->save();
		
		$game = new App\Game([
			'game_type_id' => '3',
			'game_weight_id' => '1',
			'meet_id' => '2'
		]);
		$game->save();
		
		$game = new App\Game([
			'game_type_id' => '1',
			'game_weight_id' => '1',
			'meet_id' => '3'
		]);
		$game->save();
		
		$game = new App\Game([
			'game_type_id' => '8',
			'game_weight_id' => '1',
			'meet_id' => '3'
		]);
		$game->save();
		
		$game = new App\Game([
			'game_type_id' => '4',
			'game_weight_id' => '2',
			'meet_id' => '4'
		]);
		$game->save();
		*/
    }
}
