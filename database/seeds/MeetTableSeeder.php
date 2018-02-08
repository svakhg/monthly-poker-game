<?php

use Illuminate\Database\Seeder;

class MeetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$meet = new App\Meet([
			'date' => '2012-02-18',
			'season_id' => '1'
		]);
		$meet->save();
		/*
		$meet = new App\Meet([
			'date' => '2018-01-20'
		]);
		$meet->save();
		
        $meet = new App\Meet([
			'date' => '2018-02-10'
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2018-03-17'
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2018-04-21'
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2018-05-19'
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2018-06-16'
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2018-07-21'
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2018-08-18'
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2018-09-15'
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2018-10-20'
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2018-11-17'
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2018-12-08'
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2019-01-12'
		]);
		$meet->save();
		*/
    }
}
