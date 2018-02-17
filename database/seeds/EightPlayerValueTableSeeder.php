<?php

use Illuminate\Database\Seeder;

class EightPlayerValueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eightPlayerValue = new App\EightPlayerValue([
			'finish_position' => '1st',
			'point_award' => '80.00'
		]);
		$eightPlayerValue->save();
		
		$eightPlayerValue = new App\EightPlayerValue([
			'finish_position' => '2nd',
			'point_award' => '55.00'
		]);
		$eightPlayerValue->save();
			
		$eightPlayerValue = new App\EightPlayerValue([
			'finish_position' => '3rd',
			'point_award' => '40.00'
		]);
		$eightPlayerValue->save();
		
		$eightPlayerValue = new App\EightPlayerValue([
			'finish_position' => '4th',
			'point_award' => '35.00'
		]);
		$eightPlayerValue->save();
		
		$eightPlayerValue = new App\EightPlayerValue([
			'finish_position' => '5th',
			'point_award' => '30.00'
		]);
		$eightPlayerValue->save();
			
		$eightPlayerValue = new App\EightPlayerValue([
			'finish_position' => '6th',
			'point_award' => '25.00'
		]);
		$eightPlayerValue->save();
		
		$eightPlayerValue = new App\EightPlayerValue([
			'finish_position' => '7th',
			'point_award' => '20.00'
		]);
		$eightPlayerValue->save();
		
		$eightPlayerValue = new App\EightPlayerValue([
			'finish_position' => '8th',
			'point_award' => '15.00'
		]);
		$eightPlayerValue->save();
		
    }
}
