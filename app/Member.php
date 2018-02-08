<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	protected $fillable = ['first_name', 'last_name', 'address', 'active'];
	
	public function meets()
	{
		return $this->hasMany('App\Meet');
	}
	
	public function tournamentResults()
	{
		return $this->hasMany('App\TournamentResult');
	}
}
