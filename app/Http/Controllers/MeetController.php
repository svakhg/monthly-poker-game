<?php

namespace App\Http\Controllers;

use App\Meet;
use App\Member;
use App\Game;
use App\GameType;
use App\GameWeight;
use App\GameBuyIn;
use App\Season;
use Illuminate\Http\Request;

class MeetController extends Controller
{
    public function getIndex() 
	{	
		$currentSeason = Season::orderBy('id', 'DESC')->first();
		$meets = Meet::where('season_id', $currentSeason->id)->get();
		$meetGameIds = Meet::where('season_id', $currentSeason->id)->pluck('id')->all();
		$games = Game::whereIn('meet_id', $meetGameIds)->get();
		
		return view('meets.index', [/*'seasons' => $seasons,*/ 'currentSeason' => $currentSeason, 'meets' => $meets, 'games' => $games ]);
	}
	
	public function getArchiveIndex()
	{
		$seasons = Season::orderBy('id', 'DESC')->get();
		$currentSeason = Season::orderBy('id', 'DESC')->first();
		$meets = Meet::all();
		$games = Game::all();
		
		return view('meets.archive', ['seasons' => $seasons, 'currentSeason' => $currentSeason, 'meets' => $meets, 'games' => $games]);
	}
	
	public function getArchiveSeason(Request $request)
	{
		$this->validate($request, [
			'season_id' => 'required',
		]);
		
		$seasons = Season::orderBy('id', 'DESC')->get();
		$currentSeason = Season::where('id', $request->input('season_id'))->first();
		$meets = Meet::where('season_id', $request->input('season_id'))->get();
		$games = Game::all();
		return view('meets.archive', ['seasons' => $seasons, 'currentSeason' => $currentSeason, 'meets' => $meets, 'games' => $games]);
	}
	/*
	public function getYearIndex(Request $request)
	{
		$this->validate($request, [
			'season_id' => 'required',
		]);
		
		$seasons = $this->getSeasons();
		$currentSeason = Season::where('id', $request->input('season_id'))->first();
		$meets = Meet::where('season_id', $request->input('season_id'))->get();
		$games = Game::all();
		return view('meets.index', ['seasons' => $seasons, 'currentSeason' => $currentSeason, 'meets' => $meets, 'games' => $games]);
	}
	*/
	public function getMeet($id)
	{
		$meet = Meet::find($id);
		return view('meets.meet', ['meet' => $meet, 'meetId' => $id]);
	}
	
	public function getAdminIndex()
	{
		$meets = Meet::all();
		$games = Game::all();
		return view('admin.meets.index', ['meets' => $meets, 'games' => $games]);
	}
	
	public function getAdminCreate()
	{
		$seasons = Season::orderBy('id', 'DESC')->get();
		return view('admin.meets.create', ['seasons' => $seasons]);
	}
	
	public function getAdminEdit($id)
	{
		$meet = Meet::find($id);
		$members = Member::all();
		return view('admin.meets.edit', ['meet' => $meet, 'members' => $members]);
	}
	
	public function meetAdminCreate(Request $request)
	{
		$this->validate($request, [
			'date' => 'required',
			'season_id' => 'required'
		]);
				
		$meet = new Meet();
		$meet->date = $request->input('date');
		$meet->season()->associate($request->input('season_id'));
		
		$meet->save();
		
		return redirect()->route('admin.meets.index')->with('info', 'Added date to schedule.');		
	}
	
	public function meetAdminUpdate(Request $request)
	{
		$this->validate($request, [
			'date' => 'required',
			'member_id' => 'required',
			'id' => 'required'
		]);
		
		$meet = Meet::find($request->input('id'));
		$meet->date = $request->input('date');
		$meet->member()->associate($request->input('member_id'));
		$meet->save();
							   
		return redirect()->route('admin.meets.index')->with('info', 'Updated schedule.');		
	}
	
	public function getAdminAddGame($id)
	{	
		$gameTypes = GameType::all();
		$gameWeights = GameWeight::all();
		$gameBuyIns = GameBuyIn::where('active', 1)->get();
		$meet = Meet::find($id);
		return view('admin.meets.add-games', ['meet' => $meet, 'gameTypes' => $gameTypes, 'gameWeights' => $gameWeights, 'gameBuyIns' => $gameBuyIns]);
	}
	
	public function meetAdminUpdateGame(Request $request)
	{	
		$this->validate($request, [
			'game_type' => 'required',
			'game_weight' => 'required',
			'game_buy_in' => 'required',
			'meet_id' => 'required'
		]);
		
		$game = new Game();
		$game->gameType()->associate($request->input('game_type'));
		$game->gameWeight()->associate($request->input('game_weight'));
		$game->gameBuyIn()->associate($request->input('game_buy_in'));
		$game->meet()->associate($request->input('meet_id'));
		$game->save();
		
		return redirect()->route('admin.meets.index')->with('info', 'Updated schedule.');
	}
	
	private function getSeasons()
	{
		$seasons = Season::all();
		return $seasons;
	}
	

}
