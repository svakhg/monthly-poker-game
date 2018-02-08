@extends('layouts.master')

@section('content')
	<section>
		<div class="container">
			@include('partials.errors')
			<div class="row">
				<div class="col-12 col-sm-12">
					<h2>Tournament Results for {{ $game->gameType->name . ' ' . $game->meet->date }}</h2>
					<table class="table">
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
			</div>
		</div>
	</section>
@endsection