<?php

namespace App\Http\Controllers;

use App\TournamentResultSet;
use App\Meet;
use App\Game;
use App\Season;
use App\Member;
use Illuminate\Http\Request;

class TournamentResultSetController extends Controller
{
    public function getGameResults($id)
	{
		$game = Game::find($id);
		$tournamentResultSets = TournamentResultSet::where('game_id', $id)->orderBy('point_award', 'DESC')->get();
		return view('results.game', ['game' => $game, 'results' => $tournamentResultSets]);
	}
	
	public function getPlayerOfTheYearIndex()
	{
		$seasons = Season::orderBy('id', 'DESC')->get();
		$currentSeason = $seasons->first();
		//$season = Season::find($currentSeason->id);
		$seasonDrops = $currentSeason->drop_count;
		$seasonMeets = Meet::where('season_id', $currentSeason->id)->pluck('id')->all();
		$seasonGames = Game::whereIn('meet_id', $seasonMeets)->pluck('id')->all();
		$seasonTournamentResultSets = TournamentResultSet::whereIn('game_id', $seasonGames)->get();
		$seasonMembers = TournamentResultSet::whereIn('game_id', $seasonGames)->pluck('member_id')->all();
		$seasonMembersUnique = Member::whereIn('id', $seasonMembers)->pluck('id')->all();
		$playerTotalPoints = array();
		//$seasonMembers->values()->all();
		//$seasonPlayers = TournamentResultSet::select('member_id')->where($game->meet->season->id, 1)->distinct()->get();
		foreach ($seasonMembersUnique as $seasonPlayer) {
			$pointAwardsDesc = TournamentResultSet::where('member_id', $seasonPlayer)->orderBy('point_award', 'DESC')->get();
			$totalPoints = $pointAwardsDesc->sum('point_award');
			$totalPointsAfterDrops = $pointAwardsDesc->slice(0, -$seasonDrops)->sum('point_award');
			//$totalPoints = TournamentResultSet::where('member_id', $seasonPlayer)->sum('point_award');
			$member = Member::find($seasonPlayer);
			array_push($playerTotalPoints, ['player' => $member->first_name . ' ' . $member->last_name, 'poyPoints' => $totalPointsAfterDrops, 'totalPoints' => $totalPoints]);
		}
		$playerPoints = collect($playerTotalPoints);
		$playerPointsDesc = $playerPoints->sortByDesc('poyPoints');
		return view('player-of-the-year.index', ['seasons' => $seasons, 'currentSeason' => $currentSeason, 'playerPoints' => $playerPointsDesc]);
	}
	
	public function getPlayerOfTheYearSeason(Request $request)
	{
		$seasons = Season::orderBy('id', 'DESC')->get();
		$currentSeason = Season::find($request->input('season_id'));
		//$season = Season::find($currentSeason->id);
		$seasonDrops = $currentSeason->drop_count;
		$seasonMeets = Meet::where('season_id', $currentSeason->id)->pluck('id')->all();
		$seasonGames = Game::whereIn('meet_id', $seasonMeets)->pluck('id')->all();
		$seasonTournamentResultSets = TournamentResultSet::whereIn('game_id', $seasonGames)->get();
		$seasonMembers = TournamentResultSet::whereIn('game_id', $seasonGames)->pluck('member_id')->all();
		$seasonMembersUnique = Member::whereIn('id', $seasonMembers)->pluck('id')->all();
		$playerTotalPoints = array();
		//$seasonMembers->values()->all();
		//$seasonPlayers = TournamentResultSet::select('member_id')->where($game->meet->season->id, 1)->distinct()->get();
		foreach ($seasonMembersUnique as $seasonPlayer) {
			$pointAwardsDesc = TournamentResultSet::where('member_id', $seasonPlayer)->orderBy('point_award', 'DESC')->get();
			$totalPoints = $pointAwardsDesc->sum('point_award');
			$totalPointsAfterDrops = $pointAwardsDesc->slice(0, -$seasonDrops)->sum('point_award');
			//$totalPoints = TournamentResultSet::where('member_id', $seasonPlayer)->sum('point_award');
			$member = Member::find($seasonPlayer);
			array_push($playerTotalPoints, ['player' => $member->first_name . ' ' . $member->last_name, 'poyPoints' => $totalPointsAfterDrops, 'totalPoints' => $totalPoints]);
		}
		$playerPoints = collect($playerTotalPoints);
		$playerPointsDesc = $playerPoints->sortByDesc('poyPoints');
		return view('player-of-the-year.index', ['seasons' => $seasons, 'currentSeason' => $currentSeason, 'playerPoints' => $playerPointsDesc]);
	}
}
