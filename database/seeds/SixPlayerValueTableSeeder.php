<?php

use Illuminate\Database\Seeder;

class SixPlayerValueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$sixPlayerValue = new App\SixPlayerValue([
			'finish_position' => '1st',
			'point_award' => '70.00'
		]);
		$sixPlayerValue->save();
		
        $sixPlayerValue = new App\SixPlayerValue([
			'finish_position' => '2nd',
			'point_award' => '45.00'
		]);
		$sixPlayerValue->save();
		
		$sixPlayerValue = new App\SixPlayerValue([
			'finish_position' => '3rd',
			'point_award' => '30.00'
		]);
		$sixPlayerValue->save();
			
		$sixPlayerValue = new App\SixPlayerValue([
			'finish_position' => '4th',
			'point_award' => '25.00'
		]);
		$sixPlayerValue->save();
		
		$sixPlayerValue = new App\SixPlayerValue([
			'finish_position' => '5th',
			'point_award' => '20.00'
		]);
		$sixPlayerValue->save();
		
		$sixPlayerValue = new App\SixPlayerValue([
			'finish_position' => '6th',
			'point_award' => '15.00'
		]);
		$sixPlayerValue->save();
    }
}
