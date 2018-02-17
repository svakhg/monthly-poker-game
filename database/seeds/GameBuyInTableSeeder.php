<?php

use Illuminate\Database\Seeder;

class GameBuyInTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gameBuyIn = new App\GameBuyIn([
			'amount' => '10.00'
		]);
		$gameBuyIn->save();
		
		$gameBuyIn = new App\GameBuyIn([
			'amount' => '20.00'
		]);
		$gameBuyIn->save();
		
		$gameBuyIn = new App\GameBuyIn([
			'amount' => '25.00'
		]);
		$gameBuyIn->save();
		
    }
}
