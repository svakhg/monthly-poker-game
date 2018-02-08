<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable = ['year'];
	
	public function meets()
	{
		return $this->hasMany('App\Meet');
	}
}
