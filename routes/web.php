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
	
	Route::post('/', [
		'uses' => 'MeetController@getYearIndex',
		'as' => 'meets.index'
	]);

	Route::get('/{id}', [
		'uses' => 'MeetController@getGameDate',
		'as' => 'meets.meet'
	]);
	
});

// Games
Route::group(['prefix' => 'results'], function () {
	
	Route::get('game/{id}', [
		'uses' => 'TournamentResultSetController@getGame',
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
		
	Route::group(['prefix' => 'members'], function() {
		
		Route::get('/', [
			'uses' => 'MemberController@getAdminIndex',
			'as' => 'admin.members.index'
		]);

		Route::get('add', [
			'uses' => 'MemberController@getAdminCreate',
			'as' => 'admin.members.create'
		]);

		Route::post('add', [
			'uses' => 'MemberController@memberAdminCreate',
			'as' => 'admin.members.create'
		]);

		Route::get('edit/{id}', [
			'uses' => 'MemberController@getAdminEdit',
			'as' => 'admin.members.edit'
		]);

		Route::post('edit', [
			'uses' => 'MemberController@memberAdminUpdate',
			'as' => 'admin.members.update'
		]);
		
	});
	
	Route::group(['prefix' => 'meets'], function() {
		
		Route::get('/', [
			'uses' => 'MeetController@getAdminIndex',
			'as' => 'admin.meets.index'
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
		
		Route::get('game/{id}', [
			'uses' => 'GameController@getAdminGame',
			'as' => 'admin.games.game'
		]);
		
		Route::get('player-count/{id}', [
			'uses' => 'GameController@getAdminGameTournamentAwardSet',
			'as' => 'admin.games.edit-player-count'
		]);
		
		Route::post('player-count', [
			'uses' => 'GameController@gameTournamentAwardSetAdminUpdate',
			'as' => 'admin.games.update-player-count'
		]);
		
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