@extends('layouts.master')

@section('content')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-8">
					<h2>{{ $currentSeason->year }} Season Schedule</h2>
					<table class="table">
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
				<div class="col-4">
				</div>
			</div>
		</div>
	</section>
@endsection