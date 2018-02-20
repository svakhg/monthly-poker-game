<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeasonResult extends Model
{
    protected $fillable = ['finish_position', 'poy_points', 'total_points', 'money_award', 'season_id', 'member_id'];
	
	public function season()
	{
		return $this->belongsTo('App\Season');
	}
	
	public function member()
	{
		return $this->belongsTo('App\Member');
	}
	
}
