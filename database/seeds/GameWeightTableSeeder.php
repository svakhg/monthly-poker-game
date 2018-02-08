<?php

use Illuminate\Database\Seeder;

class GameWeightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gameWeight = new App\GameWeight([
			'name' => 'light',
			'multiplier' => '1.0'
		]);
		$gameWeight->save();
		
		$gameWeight = new App\GameWeight([
			'name' => 'medium',
			'multiplier' => '1.25'
		]);
		$gameWeight->save();
		
		$gameWeight = new App\GameWeight([
			'name' => 'heavy',
			'multiplier' => '1.50'
		]);
		$gameWeight->save();
    }
}
