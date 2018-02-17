<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyIn extends Model
{
    protected $fillable = ['buy_in'];
	
	public function games()
	{
		return $this->hasMany('App\Game');
	}
}
