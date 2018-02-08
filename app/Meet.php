<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meet extends Model
{
    protected $fillable = ['date', 'member_id', 'season_id'];
	
	public function member()
	{
		return $this->belongsTo('App\Member');
	}
	
	public function games()
	{
		return $this->hasMany('App\Game');
	}
	
	public function season()
	{
		return $this->belongsTo('App\Season');
	}
	
}
