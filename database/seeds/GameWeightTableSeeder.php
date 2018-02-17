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
			'point_multiplier' => '1.0',
			'money_multiplier' => '1.0'
		]);
		$gameWeight->save();
		
		$gameWeight = new App\GameWeight([
			'name' => 'medium',
			'point_multiplier' => '1.25',
			'money_multiplier' => '2.00'
			
		]);
		$gameWeight->save();
		
		$gameWeight = new App\GameWeight([
			'name' => 'heavy',
			'point_multiplier' => '1.50',
			'money_multiplier' => '2.50'
		]);
		$gameWeight->save();
    }
}
