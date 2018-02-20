<?php

namespace App\Http\Controllers;

use App\BuyIn;
use Illuminate\Http\Request;

class BuyInController extends Controller
{
    public function getIndex()
	{
		$buyIns = BuyIn::all();
		return view('admin.settings.game-buy-in', ['buyIns' => $buyIns]);
	}
	
	public function updateBuyIn(Request $request)
	{
		$input = $request->except('amount', '_token');
		$buyInIds = BuyIn::where('id', '>', 0)->pluck('id')->toArray();
		
		
		foreach ($buyInIds as $value) {
			if (in_array($value, $input)) {
				$buyIn = BuyIn::find($value);
				$buyIn->active = true;
				$buyIn->save();
			} else {
				$buyIn = BuyIn::find($value);
				$buyIn->active = false;
				$buyIn->save();
			}
		}
		
		if ($request->input('amount')) {
			$buyIn = new BuyIn([
				'amount' => $request->input('amount')
			]);
			$buyIn->save();
		}
		
		return redirect()->route('admin.settings.index')->with('info', 'Buy-ins updated');
	}
		
}
