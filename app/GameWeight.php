<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameWeight extends Model
{
    protected $fillable = ['name', 'multiplier'];
	
	public function games()
	{
		return $this->belongsToMany('App\Game');
	}
}
