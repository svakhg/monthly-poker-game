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
		$this->call(GameBuyInTableSeeder::class);
		$this->call(GameTableSeeder::class);
		// $this->call(TournamentAwardSetTableSeeder::class);
		$this->call(PlayerCountTableSeeder::class);
		$this->call(FivePlayerValueTableSeeder::class);
		$this->call(SixPlayerValueTableSeeder::class);
		$this->call(SevenPlayerValueTableSeeder::class);
		$this->call(EightPlayerValueTableSeeder::class);
		$this->call(NinePlayerValueTableSeeder::class);
		$this->call(TenPlayerValueTableSeeder::class);
		$this->call(ElevenPlayerValueTableSeeder::class);
		$this->call(TwelvePlayerValueTableSeeder::class);
		$this->call(ThirteenPlayerValueTableSeeder::class);
		$this->call(FourteenPlayerValueTableSeeder::class);
    }
}
