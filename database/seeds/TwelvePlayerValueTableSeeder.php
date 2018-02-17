<?php

use Illuminate\Database\Seeder;

class TwelvePlayerValueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$twelvePlayerValue = new App\TwelvePlayerValue([
			'finish_position' => '1st',
			'point_award' => '100.00'
		]);
		$twelvePlayerValue->save();
		
        $twelvePlayerValue = new App\TwelvePlayerValue([
			'finish_position' => '2nd',
			'point_award' => '80.00'
		]);
		$twelvePlayerValue->save();
		
        $twelvePlayerValue = new App\TwelvePlayerValue([
			'finish_position' => '3rd',
			'point_award' => '65.00'
		]);
		$twelvePlayerValue->save();
		
        $twelvePlayerValue = new App\TwelvePlayerValue([
			'finish_position' => '4th',
			'point_award' => '55.00'
		]);
		$twelvePlayerValue->save();
		
        $twelvePlayerValue = new App\TwelvePlayerValue([
			'finish_position' => '5th',
			'point_award' => '50.00'
		]);
		$twelvePlayerValue->save();
		
		$twelvePlayerValue = new App\TwelvePlayerValue([
			'finish_position' => '6th',
			'point_award' => '45.00'
		]);
		$twelvePlayerValue->save();
			
		$twelvePlayerValue = new App\TwelvePlayerValue([
			'finish_position' => '7th',
			'point_award' => '40.00'
		]);
		$twelvePlayerValue->save();
		
		$twelvePlayerValue = new App\TwelvePlayerValue([
			'finish_position' => '8th',
			'point_award' => '35.00'
		]);
		$twelvePlayerValue->save();
		
		$twelvePlayerValue = new App\TwelvePlayerValue([
			'finish_position' => '9th',
			'point_award' => '30.00'
		]);
		$twelvePlayerValue->save();
			
		$twelvePlayerValue = new App\TwelvePlayerValue([
			'finish_position' => '10th',
			'point_award' => '25.00'
		]);
		$twelvePlayerValue->save();
		
		$twelvePlayerValue = new App\TwelvePlayerValue([
			'finish_position' => '11th',
			'point_award' => '20.00'
		]);
		$twelvePlayerValue->save();
		
		$twelvePlayerValue = new App\TwelvePlayerValue([
			'finish_position' => '12th',
			'point_award' => '15.00'
		]);
		$twelvePlayerValue->save();
    }
}
