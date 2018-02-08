@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			@include('partials.errors')
			<div class="row">
				<div class="col-12 col-sm-12">
					<h2>Set player count for {{ $game->gameType->name . ' ' . $game->meet->date }}</h2> 
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-12">
					<form action="{{ route('admin.games.update-player-count') }}" method="POST">
						<div class="form-row">
							<div class="form-group col-12 col-sm-12">
								
								<label for="player_count">How many players are playing in this game?</label>
								<select class="form-control" name="player_count">
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
								</select>
								<input name="game_id" type="hidden" value="{{ $game->id }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<button class="btn btn-primary" type="submit">Set player count</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection