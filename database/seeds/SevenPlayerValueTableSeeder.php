<?php

use Illuminate\Database\Seeder;

class SevenPlayerValueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$sevenPlayerValue = new App\SevenPlayerValue([
			'finish_position' => '1st',
			'point_award' => '75.00'
		]);
		$sevenPlayerValue->save();
		
        $sevenPlayerValue = new App\SevenPlayerValue([
			'finish_position' => '2nd',
			'point_award' => '50.00'
		]);
		$sevenPlayerValue->save();
		
        $sevenPlayerValue = new App\SevenPlayerValue([
			'finish_position' => '3rd',
			'point_award' => '35.00'
		]);
		$sevenPlayerValue->save();
		
		$sevenPlayerValue = new App\SevenPlayerValue([
			'finish_position' => '4th',
			'point_award' => '30.00'
		]);
		$sevenPlayerValue->save();
			
		$sevenPlayerValue = new App\SevenPlayerValue([
			'finish_position' => '5th',
			'point_award' => '25.00'
		]);
		$sevenPlayerValue->save();
		
		$sevenPlayerValue = new App\SevenPlayerValue([
			'finish_position' => '6th',
			'point_award' => '20.00'
		]);
		$sevenPlayerValue->save();
		
		$sevenPlayerValue = new App\SevenPlayerValue([
			'finish_position' => '7th',
			'point_award' => '15.00'
		]);
		$sevenPlayerValue->save();
    }
}
