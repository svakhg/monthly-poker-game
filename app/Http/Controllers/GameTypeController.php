<?php

namespace App\Http\Controllers;

use App\GameType;
use Illuminate\Http\Request;

class GameTypeController extends Controller
{
    public function getIndex()
	{
		$gameTypes = GameType::all();
		return view('admin.settings.game-type', ['gameTypes' => $gameTypes]);
	}
	
	public function updateGameType(Request $request)
	{
		$input = $request->except('name', '_token');
		$gameTypeIds = GameType::where('id', '>', 0)->pluck('id')->toArray();
		
		foreach ($gameTypeIds as $value) {
			if (in_array($value, $input)) {
				$gameType = GameType::find($value);
				$gameType->active = true;
				$gameType->save();
			} else {
				$gameType = GameType::find($value);
				$gameType->active = false;
				$gameType->save();
			}
		}
		
		if ($request->input('name')) {
			$gameType = new GameType([
				'name' => $request->input('name')
			]);
			$gameType->save();
		}
		
		return redirect()->route('admin.settings.index')->with('info', 'Game types updated');
	}
}
