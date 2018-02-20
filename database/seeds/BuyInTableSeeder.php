<?php

use Illuminate\Database\Seeder;

class BuyInTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buyIn = new App\BuyIn([
			'amount' => '10.00'
		]);
		$buyIn->save();
		
		$buyIn = new App\BuyIn([
			'amount' => '20.00'
		]);
		$buyIn->save();
		
		$buyIn = new App\BuyIn([
			'amount' => '25.00'
		]);
		$buyIn->save();
		
		$buyIn = new App\BuyIn([
			'amount' => '30.00'
		]);
		$buyIn->save();
		
		$buyIn = new App\BuyIn([
			'amount' => '15.00'
		]);
		$buyIn->save();
		
		$buyIn = new App\BuyIn([
			'amount' => '40.00'
		]);
		$buyIn->save();
		
		$buyIn = new App\BuyIn([
			'amount' => '60.00'
		]);
		$buyIn->save();
		
    }
}
