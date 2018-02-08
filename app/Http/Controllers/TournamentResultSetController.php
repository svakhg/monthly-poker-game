<?php

namespace App\Http\Controllers;

use App\TournamentResultSet;
use App\Game;
use Illuminate\Http\Request;

class TournamentResultSetController extends Controller
{
    public function getGame($id)
	{
		$game = Game::find($id);
		$tournamentResultSets = TournamentResultSet::where('game_id', $id)->orderBy('point_award', 'DESC')->get();
		return view('results.game', ['game' => $game, 'results' => $tournamentResultSets]);
	}
}
