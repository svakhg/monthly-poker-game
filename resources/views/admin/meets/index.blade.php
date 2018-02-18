@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			@if(Session::has('info'))
				<div class="row">
					<div class="col-12">
						<p class="alert alert-info">{{ Session::get('info') }}</p>
					</div>
				</div>
			@endif
			<div class="row">
				<div class="col-12">
					<h2>{{ $currentSeason->year }} Season Schedule</h2>
					<table class="table table-sm">
						<tr>
							<th>Date</th>
							<th>Host</th>
							<th>Games</th>
							<th></th>
							<th></th>
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
												<a class="badge badge-primary ml-4" href="{{ route('admin.games.game', ['id' => $game->id]) }}">{{ $game->gameType->name }}</a>
											@elseif($game->gameWeight->name === "medium")
												<a class="badge badge-warning ml-4" href="{{ route('admin.games.game', ['id' => $game->id]) }}">{{ $game->gameType->name }}</a>
											@else
												<a class="badge badge-danger ml-4" href="{{ route('admin.games.game', ['id' => $game->id]) }}">{{ $game->gameType->name }}</a>
											@endif
											{!! $tournamentResults->contains('game_id', $game->id) ? '<img alt="game complete" class="icon game-complete" src="/open-iconic/svg/circle-check-green.svg">' : ' ' !!}
										@endif
									@endif
								@endforeach
								</td>
								<td><a href="{{ route('admin.meets.edit', ['id' => $meet->id]) }}">Edit/Set Host</a></td>
								<td><a href="{{ route('admin.meets.add-games', ['id' => $meet->id]) }}">Add game</a></td>
							</tr>
						@endforeach
						
					</table>
					<a href="{{ route('admin.meets.create') }}">Add date to schedule</a>
				</div>
			</div>
		</div>
	</section>
@endsection