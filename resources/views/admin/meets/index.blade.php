@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			@if(Session::has('info'))
				<div class="row">
					<div class="col-9 col-sm-9">
						<p class="alert alert-info">{{ Session::get('info') }}</p>
					</div>
				</div>
			@endif
			<div class="row">
				<div class="col-9 col-sm-9">
					<table class="table">
						<caption>Schedule <span class="label label-primary">normal</span> <span class="label label-warning">big game</span> <span class="label label-danger">main event</span></caption>
						<tr>
							<th>Date</th>
							<th>Host</th>
							<th>Location</th>
							<th>Games</th>
							<th></th>
							<th></th>
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
											<a href="{{ route('admin.games.game', ['id' => $game->id]) }}">
												<span class="label label-primary">{{ $game->gameType->name }}</span>
											</a>
										@elseif($game->gameWeight->name === "medium")
											<a href="{{ route('admin.games.game', ['id' => $game->id]) }}">
												<span class="label label-warning">{{ $game->gameType->name }}</span>
											</a>
										@else
											<a href="{{ route('admin.games.game', ['id' => $game->id]) }}">
												<span class="label label-danger">{{ $game->gameType->name }}</span>
											</a>
										@endif
									@endif
								@endif
							@endforeach
							</td>
							<td><a href="{{ route('admin.meets.edit', ['id' => $meet->id]) }}">Edit/Update Host</a></td>
							<td><a href="{{ route('admin.meets.add-games', ['id' => $meet->id]) }}">Add games</a></td>
						</tr>
						@endforeach
						
					</table>
					<a href="{{ route('admin.meets.create') }}">Add date to schedule</a>
				</div>
				<div class="col-3 col-sm-3">
				</div>
			</div>
		</div>
	</section>
@endsection