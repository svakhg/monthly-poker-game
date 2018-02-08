<?php

use Illuminate\Database\Seeder;

class GameTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
        $gameType = new App\GameType([
			'name' => 'NLHE'
		]);
		$gameType->save();
		
		$gameType = new App\GameType([
			'name' => 'PLO'
		]);
		$gameType->save();
		
		$gameType = new App\GameType([
			'name' => 'PLO8'
		]);
		$gameType->save();
		
		$gameType = new App\GameType([
			'name' => 'PLO/PLO8'
		]);
		$gameType->save();
		
		$gameType = new App\GameType([
			'name' => '8-Game'
		]);
		$gameType->save();
		
		$gameType = new App\GameType([
			'name' => 'Razz'
		]);
		$gameType->save();
		
		$gameType = new App\GameType([
			'name' => 'Single Draw (NL)'
		]);
		$gameType->save();
		
		$gameType = new App\GameType([
			'name' => 'Stud'
		]);
		$gameType->save();
		
		$gameType = new App\GameType([
			'name' => 'Triple Draw (limit)'
		]);
		$gameType->save();
		
		$gameType = new App\GameType([
			'name' => 'Badugi'
		]);
		$gameType->save();
				
    }
}
