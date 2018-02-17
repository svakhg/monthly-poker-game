@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			@include('partials.errors')
			<div class="row">
				<div class="col-12">
					<h2>Record results for {{ $game->gameType->name . ' ' . $game->meet->date }}</h2> 
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<form action="{{ route('admin.games.update-did-not-play') }}" method="POST">
						<p>Put a check next to all players who <strong>are not</strong> playing in this game</p>
						@foreach($members as $member)
							<div class="form-group">
								<div class="form-check">
									<div class="checkbox">
										<input class="form-check-input" id="{{ 'dnpCheck' . $member->id }}" name="did_not_play[]" type="checkbox" value="{{ $member->id }}">
										<label class="form-check-label" for="{{ 'dnpCheck' . $member->id }}">{{ $member->first_name . ' ' . $member->last_name }}</label>
									</div>
								</div>
							</div>
						@endforeach
						<div class="form-group">
							<input name="game_id" type="hidden" value="{{ $game->id }}">
							<input name="_token" type="hidden" value="{{ csrf_token() }}">
							<button class="btn btn-primary" type="submit">Score the absentees</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection