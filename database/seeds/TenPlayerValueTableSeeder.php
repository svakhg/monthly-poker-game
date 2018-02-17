<?php

use Illuminate\Database\Seeder;

class TenPlayerValueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$tenPlayerValue = new App\TenPlayerValue([
			'finish_position' => '1st',
			'point_award' => '90.00'
		]);
		$tenPlayerValue->save();
		
        $tenPlayerValue = new App\TenPlayerValue([
			'finish_position' => '2nd',
			'point_award' => '70.00'
		]);
		$tenPlayerValue->save();
		
        $tenPlayerValue = new App\TenPlayerValue([
			'finish_position' => '3rd',
			'point_award' => '55.00'
		]);
		$tenPlayerValue->save();
		
		$tenPlayerValue = new App\TenPlayerValue([
			'finish_position' => '4th',
			'point_award' => '45.00'
		]);
		$tenPlayerValue->save();
			
		$tenPlayerValue = new App\TenPlayerValue([
			'finish_position' => '5th',
			'point_award' => '40.00'
		]);
		$tenPlayerValue->save();
		
		$tenPlayerValue = new App\TenPlayerValue([
			'finish_position' => '6th',
			'point_award' => '35.00'
		]);
		$tenPlayerValue->save();
		
		$tenPlayerValue = new App\TenPlayerValue([
			'finish_position' => '7th',
			'point_award' => '30.00'
		]);
		$tenPlayerValue->save();
			
		$tenPlayerValue = new App\TenPlayerValue([
			'finish_position' => '8th',
			'point_award' => '25.00'
		]);
		$tenPlayerValue->save();
		
		$tenPlayerValue = new App\TenPlayerValue([
			'finish_position' => '9th',
			'point_award' => '20.00'
		]);
		$tenPlayerValue->save();
		
		$tenPlayerValue = new App\TenPlayerValue([
			'finish_position' => '10th',
			'point_award' => '15.00'
		]);
		$tenPlayerValue->save();
    }
}
