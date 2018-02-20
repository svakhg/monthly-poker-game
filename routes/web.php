<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

// Members
Route::group(['prefix' => 'members'], function () {
	
	Route::get('/', [
		'uses' => 'MemberController@getIndex',
		'as' => 'members.index'
	]);

	Route::get('/{id}', [
		'uses' => 'MemberController@getMember',
		'as' => 'members.member'
	]);
	
});

// Dates
Route::group(['prefix' => 'meets'], function () {
	
	Route::get('/', [
		'uses' => 'MeetController@getIndex',
		'as' => 'meets.index'
	]);
	
	Route::get('archive', [
		'uses' => 'MeetController@getArchiveIndex',
		'as' => 'meets.archive'
	]);
	
	Route::post('archive', [
		'uses' => 'MeetController@getArchiveSeason',
		'as' => 'meets.archive'
	]);
	
	Route::post('/', [
		'uses' => 'MeetController@getYearIndex',
		'as' => 'meets.index'
	]);

	Route::get('/{id}', [
		'uses' => 'MeetController@getGameDate',
		'as' => 'meets.meet'
	]);
	
});

Route::group(['prefix' => 'player-of-the-year'], function () {
	
	Route::get('/', [
		'uses' => 'TournamentResultSetController@getPlayerOfTheYearIndex',
		'as' => 'player-of-the-year.index'
	]);
	/*
	Route::get('season', [
		'uses' => 'TournamentResultSetController@getPlayerOfTheYearSeasonIndex',
		'as' => 'player-of-the-year.archive'
	]);
	*/
	Route::post('/', [
		'uses' => 'TournamentResultSetController@getPlayerOfTheYearSeason',
		'as' => 'player-of-the-year.get-season'
	]);
	
});

// Games
Route::group(['prefix' => 'results'], function () {
	
	Route::get('game/{id}', [
		'uses' => 'TournamentResultSetController@getGameResults',
		'as' => 'results.game'
	]);
	/*
	Route::post('/', [
		'uses' => 'MeetController@getYearIndex',
		'as' => 'meets.index'
	]);

	Route::get('/{id}', [
		'uses' => 'MeetController@getGameDate',
		'as' => 'meets.meet'
	]);
	*/
});

// Admin
Route::group(['prefix' => 'admin'], function () {
	
	Route::get('/', function() {
		return view('admin.index');
	})->name('admin.index');
		
	Route::group(['prefix' => 'settings'], function() {
		
		Route::get('/', function() {
			return view('admin.settings.index');
		})->name('admin.settings.index');
		
		Route::get('game-type', [
			'uses' => 'GameTypeController@getIndex',
			'as' => 'admin.settings.game-type'
		]);
		
		Route::post('game-type', [
			'uses' => 'GameTypeController@updateGameType',
			'as' => 'admin.settings.update-game-type'
		]);
		
		Route::get('game-buy-in', [
			'uses' => 'BuyInController@getIndex',
			'as' => 'admin.settings.game-buy-in'
		]);
		
		Route::post('game-buy-in', [
			'uses' => 'BuyInController@updateBuyIn',
			'as' => 'admin.settings.update-game-buy-in'
		]);
		
		Route::group(['prefix' => 'members'], function() {
		
			Route::get('/', [
				'uses' => 'MemberController@getAdminIndex',
				'as' => 'admin.settings.members.index'
			]);

			Route::get('add', [
				'uses' => 'MemberController@getAdminCreate',
				'as' => 'admin.settings.members.create'
			]);

			Route::post('add', [
				'uses' => 'MemberController@memberAdminCreate',
				'as' => 'admin.settings.members.create'
			]);

			Route::get('edit/{id}', [
				'uses' => 'MemberController@getAdminEdit',
				'as' => 'admin.settings.members.edit'
			]);

			Route::post('edit', [
				'uses' => 'MemberController@memberAdminUpdate',
				'as' => 'admin.settings.members.update'
			]);

		});
		
	});
	
	Route::group(['prefix' => 'meets'], function() {
		
		Route::get('/', [
			'uses' => 'MeetController@getAdminIndex',
			'as' => 'admin.meets.index'
		]);
		
		Route::post('/', [
			'uses' => 'MeetController@getAdminSeason',
			'as' => 'admin.meets.get-season'
		]);

		Route::get('add', [
			'uses' => 'MeetController@getAdminCreate',
			'as' => 'admin.meets.create'
		]);
		
		Route::post('add', [
			'uses' => 'MeetController@meetAdminCreate',
			'as' => 'admin.meets.create'
		]);
		
		Route::get('edit/{id}', [
			'uses' => 'MeetController@getAdminEdit',
			'as' => 'admin.meets.edit'
		]);

		Route::post('edit', [
			'uses' => 'MeetController@meetAdminUpdate',
			'as' => 'admin.meets.update'
		]);
		
		Route::get('add-games/{id}', [
			'uses' => 'MeetController@getAdminAddGame',
			'as' => 'admin.meets.add-games'
		]);
		
		Route::post('add-games', [
			'uses' => 'MeetController@meetAdminUpdateGame',
			'as' => 'admin.meets.update-games'
		]);
		
	});
	
	Route::group(['prefix' => 'games'], function() {
		
		Route::get('/', [
			'uses' => 'GameController@getIndex',
			'as' => 'admin.games.index'
		]);
		
		Route::get('game/{id}', [
			'uses' => 'GameController@getAdminGame',
			'as' => 'admin.games.game'
		]);
		
		Route::get('edit-game/{id}', [
			'uses' => 'GameController@getAdminEditGame',
			'as' => 'admin.games.edit-game'
		]);
		
		Route::post('update-game', [
			'uses' => 'GameController@gameAdminUpdate',
			'as' => 'admin.games.update-game'
		]);
		/*
		Route::get('player-count/{id}', [
			'uses' => 'GameController@getAdminGameTournamentAwardSet',
			'as' => 'admin.games.edit-player-count'
		]);
		
		Route::post('player-count', [
			'uses' => 'GameController@gameTournamentAwardSetAdminUpdate',
			'as' => 'admin.games.update-player-count'
		]);
		*/
		Route::get('did-not-play/{id}', [
			'uses' => 'GameController@getAdminSetDidNotPlay',
			'as' => 'admin.games.did-not-play'
		]);
		
		Route::post('did-not-play', [
			'uses' => 'GameController@gameSetDidNotPlayAdminUpdate',
			'as' => 'admin.games.update-did-not-play'
		]);
		
		Route::get('record-results/{id}', [
			'uses' => 'GameController@getAdminGameRecordResults',
			'as' => 'admin.games.record-results'
		]);
		
		Route::post('record-results', [
			'uses' => 'GameController@gameRecordResultsAdminUpdate',
			'as' => 'admin.games.update-record-results'
		]);
		
		Route::get('remove-results/{id}', [
			'uses' => 'GameController@getAdminGameRemoveResults',
			'as' => 'admin.games.remove-results'
		]);
		
		Route::post('remove-results', [
			'uses' => 'GameController@gameRemoveResultsAdminUpdate',
			'as' => 'admin.games.remove-results-update'
		]);
		
		/*
		Route::get('record-results', [
			'uses' => 'GameController@getAdminGameRecordResults',
			'as' => 'admin.games.record-results'
		]);
		
		Route::post('did-not-play', [
			'uses' => 'GameController@membersDidNotPlayAdminUpdate',
			'as' => 'admin.games.did-not-play'
		]);
		
		Route::post('add', [
			'uses' => 'GameController@gameAdminCreate',
			'as' => 'admin.games.create'
		]);
		
		Route::get('edit/{id}', [
			'uses' => 'MeetController@getAdminEdit',
			'as' => 'admin.meets.edit'
		]);

		Route::post('edit', [
			'uses' => 'MeetController@meetAdminUpdate',
			'as' => 'admin.meets.update'
		]);
		*/
	});
	
});