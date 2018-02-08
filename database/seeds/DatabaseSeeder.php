<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		$this->call(MemberTableSeeder::class);
		$this->call(SeasonTableSeeder::class);
		$this->call(MeetTableSeeder::class);
		$this->call(GameTypeTableSeeder::class);
		$this->call(GameWeightTableSeeder::class);
		$this->call(GameTableSeeder::class);
		$this->call(TournamentAwardSetTableSeeder::class);
		$this->call(PlayerCountTableSeeder::class);
		$this->call(EightPlayerValueTableSeeder::class);
    }
}
