@extends('layouts.master')

@section('content')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Archives</h2>
					<form action="{{ route('meets.archive') }}" class="form-inline" method="POST">
						<div class="form-row">
							<div class="form-group col-6">
								<label for="season_id">Which season do you want to see?</label>
								<select class="form-control form-control-sm mx-sm-3 mb-2" name="season_id">
									@foreach($seasons as $season)
										<option value="{{ $season->id }}" {{ $season->id == $currentSeason->id ? 'selected' : '' }}>{{ $season->year }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group col-6">
								<input class="form-control-sm" name="_token" type="hidden" value="{{ csrf_token() }}">
								<input class="form-control form-control-sm mb-2" type="submit" value="Go">
							</div>
						</div>
					</form>
				</div>
			</div>
			@if(Request::isMethod('post'))
			<div class="row">
				<div class="col-12">
					<table class="table table-sm">
						<tr>
							<th>Date</th>
							<th>Host</th>
							<th>Games</th>
						</tr>
						@foreach($meets as $meet)
						<tr>
							<td>{{ $meet->date }}</td>
							<td>{{ $meet->member_id ? $meet->member->first_name . ' ' . $meet->member->last_name : 'TBD' }}</td>
							<td>
							@foreach($games as $game)
								@if($game->meet_id)
									@if($meet->id === $game->meet_id)
										@if($game->gameWeight->name === "light")
											<a class="badge badge-primary" href="{{ route('results.game', ['id' => $game->id]) }}">{{ $game->gameType->name }}</a>
										@elseif($game->gameWeight->name === "medium")
											<a class="badge badge-warning"href="{{ route('results.game', ['id' => $game->id]) }}">{{ $game->gameType->name }}</a>
										@else
											<a class="badge badge-danger"href="{{ route('results.game', ['id' => $game->id]) }}">{{ $game->gameType->name }}</a>
										@endif
									@endif
								@endif
							@endforeach
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
			@endif
		</div>
	</section>
@endsection