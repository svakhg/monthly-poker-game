<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['game_type_id', 'game_weight_id', 'meet_id', 'buy_in_id', 'prize_pool', 'player_count_id'];
	
	public function gameType()
	{
		return $this->belongsTo('App\GameType');
	}

	public function gameWeight()
	{
		return $this->belongsTo('App\GameWeight');
	}
	
	public function meet()
	{
		return $this->belongsTo('App\Meet');
	}
	
	public function buyIn()
	{
		return $this->belongsTo('App\BuyIn');
	}
	
	public function playerCount()
	{
		return $this->belongsTo('App\PlayerCount');
	}

	public function tournamentResultSets()
	{
		return $this->hasMany('App\TournamentResultSet');
	}
}
