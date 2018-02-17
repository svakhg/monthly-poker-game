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
					<table class="table table-sm">
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
											<a class="badge badge-primary" href="{{ route('admin.games.game', ['id' => $game->id]) }}">{{ $game->gameType->name }}</a>
										@elseif($game->gameWeight->name === "medium")
											<a class="badge badge-warning" href="{{ route('admin.games.game', ['id' => $game->id]) }}">{{ $game->gameType->name }}</a>
										@else
											<a class="badge badge-danger" href="{{ route('admin.games.game', ['id' => $game->id]) }}">{{ $game->gameType->name }}</a>
										@endif
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