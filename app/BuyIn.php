<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyIn extends Model
{
    protected $fillable = ['amount'];
	
	public function games()
	{
		return $this->hasMany('App\Game');
	}
	
	public function buyIns()
	{
		return $this->hasMany('App\Season');
	}
}
