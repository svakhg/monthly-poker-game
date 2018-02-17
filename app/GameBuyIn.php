<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameBuyIn extends Model
{
    protected $fillable = ['amount'];
	
	public function games()
	{
		return $this->hasMany('App\Game');
	}
}
