<?php

namespace App\Http\Controllers;

use App\GameBuyIn;
use Illuminate\Http\Request;

class GameBuyInController extends Controller
{
    public function getIndex()
	{
		$gameBuyIns = GameBuyIn::all();
		return view('admin.settings.game-buy-in', ['gameBuyIns' => $gameBuyIns]);
	}
	
	public function updateGameBuyIn(Request $request)
	{
		$input = $request->except('amount', '_token');
		$gameBuyInIds = GameBuyIn::where('id', '>', 0)->pluck('id')->toArray();
		
		
		foreach ($gameBuyInIds as $value) {
			if (in_array($value, $input)) {
				$gameBuyIn = GameBuyIn::find($value);
				$gameBuyIn->active = true;
				$gameBuyIn->save();
			} else {
				$gameBuyIn = GameBuyIn::find($value);
				$gameBuyIn->active = false;
				$gameBuyIn->save();
			}
		}
		
		if ($request->input('amount')) {
			$gameBuyIn = new GameBuyIn([
				'amount' => $request->input('amount')
			]);
			$gameBuyIn->save();
		}
		
		return redirect()->route('admin.settings.index')->with('info', 'Buy-ins updated');
	}
		
}
