<?php

use Illuminate\Database\Seeder;

class PlayerCountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$playerCount = new App\PlayerCount([
		]);
		$playerCount->save();
		
        $playerCount = new App\PlayerCount([
		]);
		$playerCount->save();
		
		$playerCount = new App\PlayerCount([
		]);
		$playerCount->save();
		
		$playerCount = new App\PlayerCount([
		]);
		$playerCount->save();
		
		$playerCount = new App\PlayerCount([
			'values_table' => 'App\FivePlayerValue'
		]);
		$playerCount->save();
		
		$playerCount = new App\PlayerCount([
			'values_table' => 'App\SixPlayerValue'
		]);
		$playerCount->save();
		
		$playerCount = new App\PlayerCount([
			'values_table' => 'App\SevenPlayerValue'
		]);
		$playerCount->save();
		
		$playerCount = new App\PlayerCount([
			'values_table' => 'App\EightPlayerValue'
		]);
		$playerCount->save();
		
		$playerCount = new App\PlayerCount([
			'values_table' => 'App\NinePlayerValue'
		]);
		$playerCount->save();
		
		$playerCount = new App\PlayerCount([
			'values_table' => 'App\TenPlayerValue'
		]);
		$playerCount->save();
		
		$playerCount = new App\PlayerCount([
			'values_table' => 'App\ElevenPlayerValue'
		]);
		$playerCount->save();
		
		$playerCount = new App\PlayerCount([
			'values_table' => 'App\TwelvePlayerValue'
		]);
		$playerCount->save();
		
		$playerCount = new App\PlayerCount([
			'values_table' => 'App\ThirteenPlayerValue'
		]);
		$playerCount->save();
		
		$playerCount = new App\PlayerCount([
			'values_table' => 'App\FourteenPlayerValue'
		]);
		$playerCount->save();
    }
}
