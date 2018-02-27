<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable = ['year', 'game_count', 'drop_count', 'player_count_id', 'buy_in_id'];
	
	public function meets()
	{
		return $this->hasMany('App\Meet');
	}
	
	public function buyIn()
	{
		return $this->belongsTo('App\BuyIn');
	}
	
	public function playerCount()
	{
		return $this->belongsTo('App\PlayerCount');
	}
	
	public function seasonResults()
	{
		return $this->hasMany('App\SeasonResult');
	}
}
