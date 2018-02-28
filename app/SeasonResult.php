<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeasonResult extends Model
{
    protected $fillable = ['season_id', 'member_id', 'money_award'];
	
	public function season()
	{
		return $this->belongsTo('App\Season');
	}
	
	public function member()
	{
		return $this->belongsTo('App\Member');
	}
	
}
