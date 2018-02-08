<?php

namespace App\Http\Controllers;

use App\Game;
use App\GameType;
use App\GameWeight;
use App\TournamentResultSet;
use App\Member;
use App\TournamentAwardSet;
use App\EightPlayerValue;
use Illuminate\Http\Request;

class GameController extends Controller
{
	
	public function getAdminGame($id)
	{
		$game = Game::find($id);
		return view('admin.games.game', ['game' => $game]);
	}
	/*
	public function getAdminAddResults($id)
	{
		$members = Member::all();
		return view('admin.games.add-results', ['members' => $members]);
	}
	*/
	public function getAdminGameTournamentAwardSet($id)
	{
		$game = Game::find($id);
		return view('admin.games.player-count', ['game' => $game]);
	}
	
	public function gameTournamentAwardSetAdminUpdate(Request $request)
	{
		$this->validate($request, [
			'player_count' => 'required',
			'game_id' => 'required'
		]);
		
		$game = Game::find($request->input('game_id'));
		$game->tournamentAwardSet()->associate($request->input('player_count'));
		$game->save();
		
		return redirect()->route('admin.games.game', ['id' => $game->id]);
	}
	
	public function getAdminSetDidNotPlay($id)
	{
		$game = Game::find($id);
		$members = Member::where('active', '1')->get();
		$tournamentValues = $game->tournamentAwardSet;
		
		return view('admin.games.did-not-play', ['game' => $game, 'members' => $members]);
	}
	
	public function gameSetDidNotPlayAdminUpdate(Request $request)
	{
		$this->validate($request, [
			'game_id' => 'required'
		]);
		$checkboxes = $request->input('did_not_play');
		
		$game = Game::find($request->input('game_id')); 
		
		foreach($checkboxes as $checkbox) {
			$recordExists = TournamentResultSet::where('game_id', $game->id)->where('member_id', $checkbox)->get();
			
			// need to check if there is already a tournament result record for this member and game before
			if ($recordExists->count() < 1) {
				$tournamentResultSet = new TournamentResultSet();
				$tournamentResultSet->member()->associate($checkbox);
				$tournamentResultSet->game()->associate($game);
				$tournamentResultSet->finish_position = 'DNP';
				$tournamentResultSet->point_award = 0.00;
				$tournamentResultSet->money_award = 0.00;
				/*
				$tournamentAwardSet = $game->tournamentAwardSet;
				$tournamentResultSet->finish_position = $tournamentAwardSet->did_not_play;
				$tournamentResultSet->point_award = $tournamentAwardSet->did_not_play_point_award;
				$tournamentResultSet->money_award = $tournamentAwardSet->did_not_play_money_award;
				*/
				$tournamentResultSet->save();
			}
			
		}
		
		$seasonPlayerCount = Member::where('active', 1)->count();
		$absenteeCount = TournamentResultSet::where('game_id', $game->id)->where('finish_position', 'DNP')->count();
		$gamePlayerCount = $seasonPlayerCount - $absenteeCount;
		$game->playerCount()->associate($gamePlayerCount);
		$game->save();
		
		return redirect()->route('admin.games.game', ['id' => $game->id]);
	}
	
	public function getAdminGameRecordResults($id)
	{
		$game = Game::find($id);
		$awardsTableName = $game->playerCount->values_table;
		$awardsTable = new $awardsTableName();
		$awards = $awardsTable::orderBy('id', 'DESC')->get();
		
		$dnps = TournamentResultSet::where('game_id', $id)->where('finish_position', 'DNP')->pluck('member_id')->all();
		$players = Member::whereNotIn('id', $dnps)->where('active', 1)->get();
		
		return view('admin.games.record-results', ['game' => $game, 'players' => $players, 'awards' => $awards]);
	}
	
	public function gameRecordResultsAdminUpdate(Request $request)
	{
		$this->validate($request, [
			
		]);
		
		$game = Game::find($request->input('game_id'));
		$awardsTable = $game->playerCount->values_table;
		//$awards = $awardsTable::all();
		$acceptableKeys = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14'];
		$input = $request->all();
		
		foreach($input as $key => $value) {
			if (in_array($key, $acceptableKeys)) {
				$tournamentResultSet = new TournamentResultSet();
				$tournamentResultSet->member()->associate($value);
				$tournamentResultSet->game()->associate($game);
				
				$award = $awardsTable::where('id', $key)->first();
				$tournamentResultSet->finish_position = $award->finish_position;
				$tournamentResultSet->point_award = $award->point_award;
				$tournamentResultSet->money_award = $award->money_award;
				
				$tournamentResultSet->save();
			}
		}
		
		return redirect()->route('admin.games.game', ['id' => $request->input('game_id')])->with('info', 'Results saved');
	}
	/*
	private function getAwardsTable($playerCount)
	{
		if ($playerCount === 8) {
			return 'App\EightPlayerValue';
		}
	}
	*/
	
}
