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
			'season_id' => 1
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2012-03-17',
			'season_id' => 1
		]);
		$meet->save();
		
        $meet = new App\Meet([
			'date' => '2012-04-21',
			'season_id' => 1
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2012-05-19',
			'season_id' => 1
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2012-06-16',
			'season_id' => 1
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2012-07-21',
			'season_id' => 1
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2012-08-18',
			'season_id' => 1
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2012-09-15',
			'season_id' => 1
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2012-10-20',
			'season_id' => 1
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2012-11-17',
			'season_id' => 1
		]);
		$meet->save();
		
		$meet = new App\Meet([
			'date' => '2012-12-08',
			'season_id' => 1
		]);
		$meet->save();
		/*
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
