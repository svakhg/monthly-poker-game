<?php

use Illuminate\Database\Seeder;

class FivePlayerValueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fivePlayerValue = new App\FivePlayerValue([
			'finish_position' => '1st',
			'point_award' => '65.00'
		]);
		$fivePlayerValue->save();
		
		$fivePlayerValue = new App\FivePlayerValue([
			'finish_position' => '2nd',
			'point_award' => '40.00'
		]);
		$fivePlayerValue->save();
			
		$fivePlayerValue = new App\FivePlayerValue([
			'finish_position' => '3rd',
			'point_award' => '25.00'
		]);
		$fivePlayerValue->save();
		
		$fivePlayerValue = new App\FivePlayerValue([
			'finish_position' => '4th',
			'point_award' => '20.00'
		]);
		$fivePlayerValue->save();
		
		$fivePlayerValue = new App\FivePlayerValue([
			'finish_position' => '5th',
			'point_award' => '15.00'
		]);
		$fivePlayerValue->save();
    }
}
