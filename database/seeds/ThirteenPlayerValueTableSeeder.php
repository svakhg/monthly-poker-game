<?php

use Illuminate\Database\Seeder;

class ThirteenPlayerValueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$thirteenPlayerValue = new App\ThirteenPlayerValue([
			'finish_position' => '1st',
			'point_award' => '105.00'
		]);
		$thirteenPlayerValue->save();
		
        $thirteenPlayerValue = new App\ThirteenPlayerValue([
			'finish_position' => '2nd',
			'point_award' => '85.00'
		]);
		$thirteenPlayerValue->save();
		
		$thirteenPlayerValue = new App\ThirteenPlayerValue([
			'finish_position' => '3rd',
			'point_award' => '70.00'
		]);
		$thirteenPlayerValue->save();
			
		$thirteenPlayerValue = new App\ThirteenPlayerValue([
			'finish_position' => '4th',
			'point_award' => '60.00'
		]);
		$thirteenPlayerValue->save();
		
        $thirteenPlayerValue = new App\ThirteenPlayerValue([
			'finish_position' => '5th',
			'point_award' => '55.00'
		]);
		$thirteenPlayerValue->save();
		
        $thirteenPlayerValue = new App\ThirteenPlayerValue([
			'finish_position' => '6th',
			'point_award' => '50.00'
		]);
		$thirteenPlayerValue->save();
		
		$thirteenPlayerValue = new App\ThirteenPlayerValue([
			'finish_position' => '7th',
			'point_award' => '45.00'
		]);
		$thirteenPlayerValue->save();
			
		$thirteenPlayerValue = new App\ThirteenPlayerValue([
			'finish_position' => '8th',
			'point_award' => '40.00'
		]);
		$thirteenPlayerValue->save();
		
		$thirteenPlayerValue = new App\ThirteenPlayerValue([
			'finish_position' => '9th',
			'point_award' => '35.00'
		]);
		$thirteenPlayerValue->save();
		
		$thirteenPlayerValue = new App\ThirteenPlayerValue([
			'finish_position' => '10th',
			'point_award' => '30.00'
		]);
		$thirteenPlayerValue->save();
			
		$thirteenPlayerValue = new App\ThirteenPlayerValue([
			'finish_position' => '11th',
			'point_award' => '25.00'
		]);
		$thirteenPlayerValue->save();
		
		$thirteenPlayerValue = new App\ThirteenPlayerValue([
			'finish_position' => '12th',
			'point_award' => '20.00'
		]);
		$thirteenPlayerValue->save();
		
		$thirteenPlayerValue = new App\ThirteenPlayerValue([
			'finish_position' => '13th',
			'point_award' => '15.00'
		]);
		$thirteenPlayerValue->save();
    }
}
