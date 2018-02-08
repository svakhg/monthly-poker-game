<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentAwardSet extends Model
{
    protected $fillable = ['first_finish_position', 'first_point_award', 'first_money_award', 'second_finish_position', 'second_point_award', 'second_money_award', 'third_finish_position', 'third_point_award', 'third_money_award', 'fourth_finish_position', 'fourth_point_award', 'fourth_money_award', 'fifth_finish_position', 'fifth_point_award', 'fifth_money_award', 'sixth_finish_position', 'sixth_point_award', 'sixth_money_award', 'seventh_finish_position', 'seventh_point_award', 'seventh_money_award', 'eighth_finish_position', 'eighth_point_award', 'eighth_money_award', 'ninth_finish_position', 'ninth_point_award', 'ninth_money_award', 'tenth_finish_position', 'tenth_point_award', 'tenth_money_award', 'eleventh_finish_position', 'eleventh_point_award', 'eleventh_money_award', 'twelfth_finish_position', 'twelfth_point_award', 'twelfth_money_award', 'thirteenth_finish_position', 'thirteenth_point_award', 'thirteenth_money_award', 'fourteenth_finish_position', 'fourteenth_point_award', 'fourteenth_money_award', 'did_not_play', 'did_not_play_point_award', 'did_not_play_money_award'];
	
	public function games()
	{
		return $this->hasMany('App\Game');
	}
	
	public function tournamentResultSets()
	{
		return $this->hasMany('App\TournamentResultSets');
	}
}
