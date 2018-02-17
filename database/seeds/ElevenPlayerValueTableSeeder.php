<?php

use Illuminate\Database\Seeder;

class ElevenPlayerValueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$elevenPlayerValue = new App\ElevenPlayerValue([
			'finish_position' => '1st',
			'point_award' => '95.00'
		]);
		$elevenPlayerValue->save();
		
        $elevenPlayerValue = new App\ElevenPlayerValue([
			'finish_position' => '2nd',
			'point_award' => '75.00'
		]);
		$elevenPlayerValue->save();
		
        $elevenPlayerValue = new App\ElevenPlayerValue([
			'finish_position' => '3rd',
			'point_award' => '60.00'
		]);
		$elevenPlayerValue->save();
		
        $elevenPlayerValue = new App\ElevenPlayerValue([
			'finish_position' => '4th',
			'point_award' => '50.00'
		]);
		$elevenPlayerValue->save();
		
		$elevenPlayerValue = new App\ElevenPlayerValue([
			'finish_position' => '5th',
			'point_award' => '45.00'
		]);
		$elevenPlayerValue->save();
			
		$elevenPlayerValue = new App\ElevenPlayerValue([
			'finish_position' => '6th',
			'point_award' => '40.00'
		]);
		$elevenPlayerValue->save();
		
		$elevenPlayerValue = new App\ElevenPlayerValue([
			'finish_position' => '7th',
			'point_award' => '35.00'
		]);
		$elevenPlayerValue->save();
		
		$elevenPlayerValue = new App\ElevenPlayerValue([
			'finish_position' => '8th',
			'point_award' => '30.00'
		]);
		$elevenPlayerValue->save();
			
		$elevenPlayerValue = new App\ElevenPlayerValue([
			'finish_position' => '9th',
			'point_award' => '25.00'
		]);
		$elevenPlayerValue->save();
		
		$elevenPlayerValue = new App\ElevenPlayerValue([
			'finish_position' => '10th',
			'point_award' => '20.00'
		]);
		$elevenPlayerValue->save();
		
		$elevenPlayerValue = new App\ElevenPlayerValue([
			'finish_position' => '11th',
			'point_award' => '15.00'
		]);
		$elevenPlayerValue->save();
    }
}
