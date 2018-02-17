<?php

use Illuminate\Database\Seeder;

class NinePlayerValueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$ninePlayerValue = new App\NinePlayerValue([
			'finish_position' => '1st',
			'point_award' => '85.00'
		]);
		$ninePlayerValue->save();
		
        $ninePlayerValue = new App\NinePlayerValue([
			'finish_position' => '2nd',
			'point_award' => '65.00'
		]);
		$ninePlayerValue->save();
		
		$ninePlayerValue = new App\NinePlayerValue([
			'finish_position' => '3rd',
			'point_award' => '50.00'
		]);
		$ninePlayerValue->save();
			
		$ninePlayerValue = new App\NinePlayerValue([
			'finish_position' => '4th',
			'point_award' => '40.00'
		]);
		$ninePlayerValue->save();
		
		$ninePlayerValue = new App\NinePlayerValue([
			'finish_position' => '5th',
			'point_award' => '35.00'
		]);
		$ninePlayerValue->save();
		
		$ninePlayerValue = new App\NinePlayerValue([
			'finish_position' => '6th',
			'point_award' => '30.00'
		]);
		$ninePlayerValue->save();
			
		$ninePlayerValue = new App\NinePlayerValue([
			'finish_position' => '7th',
			'point_award' => '25.00'
		]);
		$ninePlayerValue->save();
		
		$ninePlayerValue = new App\NinePlayerValue([
			'finish_position' => '8th',
			'point_award' => '20.00'
		]);
		$ninePlayerValue->save();
		
		$ninePlayerValue = new App\NinePlayerValue([
			'finish_position' => '9th',
			'point_award' => '15.00'
		]);
		$ninePlayerValue->save();
    }
}
