<?php

use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $member = new App\Member([
			'first_name' => 'Marc',
			'last_name' => 'Helgeson',
			'address' => '1425 N Rohde Ave Berkeley IL 60163'
		]);
		$member->save();
		
		$member = new App\Member([
			'first_name' => 'Zach',
			'last_name' => 'Kuhn'
		]);
		$member->save();
			
		$member = new App\Member([
			'first_name' => 'John',
			'last_name' => 'Baird',
			'address' => '1403 Grand Pointe Blvd West Dundee IL 60118'
		]);
		$member->save();
		
		$member = new App\Member([
			'first_name' => 'Sean',
			'last_name' => 'Baker',
			'address' => '302 Timbers Tr St Charles IL 60174'
		]);
		$member->save();
		
		$member = new App\Member([
			'first_name' => 'Brandon',
			'last_name' => 'Rees',
			'address' => '2834 W Palmer St Apt 210 Chicago IL 60647'
		]);
		$member->save();
		
		$member = new App\Member([
			'first_name' => 'Brian',
			'last_name' => 'Curley'
		]);
		$member->save();
		
		$member = new App\Member([
			'first_name' => 'Dave',
			'last_name' => 'Barthel',
			'address' => '8 Kingsport Dr Schaumburg IL 60193'
		]);
		$member->save();
		
		$member = new App\Member([
			'first_name' => 'Johnny',
			'last_name' => 'Garza'
		]);
		$member->save();
		
		$member = new App\Member([
			'first_name' => 'Kevin',
			'last_name' => 'Matlak',
			'address' => '1039 Lighthouse Dr Schaumburg IL 60193'
		]);
		$member->save();
		
		$member = new App\Member([
			'first_name' => 'Chris',
			'last_name' => 'Heinl'
		]);
		$member->save();
		
		$member = new App\Member([
			'first_name' => 'Brandon',
			'last_name' => 'Fosco'
		]);
		$member->save();
		
		$member = new App\Member([
			'first_name' => 'Ryan',
			'last_name' => 'Lange'
		]);
		$member->save();
		
		$member = new App\Member([
			'first_name' => 'Josh',
			'last_name' => 'Lange'
		]);
		$member->save();
		
		$member = new App\Member([
			'first_name' => 'Dan',
			'last_name' => 'Griffin'
		]);
		$member->save();
    }
}
