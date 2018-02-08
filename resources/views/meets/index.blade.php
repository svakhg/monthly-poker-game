@extends('layouts.master')

@section('content')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-8 col-sm-8">
					<h2>{{ $currentSeason->year }} Season Schedule</h2>
					<form action="{{ route('meets.index') }}" method="POST">
						<div class="form-group">
							<select name="season_id">
								@foreach($seasons as $season)
									<option value="{{ $season->id }}" {{ $currentSeason->id == $season->id ? 'selected' : ' ' }}>{{ $season->year }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<input name="_token" type="hidden" value="{{ csrf_token() }}">
							<button class="btn btn-primary" type="submit">Refresh</button>
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-8 col-sm-8">
					<table class="table">
						<caption>Schedule</caption>
						<tr>
							<th>Date</th>
							<th>Host</th>
							<th>Location</th>
							<th>Games</th>
						</tr>
						@foreach($meets as $meet)
						<tr>
							<td>{{ $meet->date }}</td>
							<td>{{ $meet->member_id ? $meet->member->first_name . ' ' . $meet->member->last_name : 'TBD' }}</td>
							@if($meet->member_id)
							<td><a href="https://maps.google.com/?q={{ $meet->member->address }}">{{ $meet->member->address }}</a></td>
							@else
							<td>TBD</td>
							@endif
							<td>
							@foreach($games as $game)
								@if($game->meet_id)
									@if($meet->id === $game->meet_id)
										@if($game->gameWeight->name === "light")
											<a href="{{ route('results.game', ['id' => $game->id]) }}">
												<span class="label label-primary">{{ $game->gameType->name }}</span>
											</a>
										@elseif($game->gameWeight->name === "medium")
											<a href="{{ route('results.game', ['id' => $game->id]) }}">
												<span class="label label-warning">{{ $game->gameType->name }}</span>
											</a>
										@else
											<a href="{{ route('results.game', ['id' => $game->id]) }}">
												<span class="label label-danger">{{ $game->gameType->name }}</span>
											</a>
										@endif
									@endif
								@endif
							@endforeach
							</td>
						</tr>
						@endforeach
					</table>
				</div>
				<div class="col-4 col-sm-4">
				</div>
			</div>
		</div>
	</section>
@endsection