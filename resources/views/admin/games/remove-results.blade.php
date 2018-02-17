@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			@include('partials.errors')
			<div class="row">
				<div class="col-12 col-sm-8">
					<h2>Tournament Results for {{ $game->gameType->name . ' ' . $game->meet->date }}</h2>
					<table class="table table-sm">
						<caption></caption>
						<tr>
							<th>Player</th>
							<th>Place</th>
							<th>Points</th>
							<th>Money</th>
						</tr>
						@foreach($results as $result)
						<tr>
							<td>{{ $result->member->first_name . ' ' . $result->member->last_name }}</td>
							<td>{{ $result->finish_position }}</td>
							<td>{{ $result->point_award }}</td>
							<td>{{ $result->money_award }}</td>
						</tr>
						@endforeach
					</table>
				</div>
				<div class="col-12 col-sm-4">
					<form action="{{ route('admin.games.remove-results-update') }}" method="POST">
						<p>Deleting these records cannot be undone. Proceed with caution.</p>
						<input name="_token" type="hidden" value="{{ csrf_token() }}">
						<input name="game_id" type="hidden" value="{{ $game->id }}">
						<input class="btn btn-warning" type="submit">
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection