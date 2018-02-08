<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentResultSet extends Model
{
    protected $fillable = ['finish_position', 'point_award', 'money_award', 'game_id', 'member_id'];
	
	public function game()
	{
		return $this->belongsTo('App\Game');
	}
	
	public function member()
	{
		return $this->belongsTo('App\Member');
	}
	
	public function tournamentAwardSet()
	{
		return $this->belongsTo('App\TournamentAwardSet');
	}
}
