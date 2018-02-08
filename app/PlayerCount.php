<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerCount extends Model
{
    protected $fillable = ['player_count', 'values_table'];
	
	public function games()
	{
		return $this->hasMany('App\Game');
	}
}
