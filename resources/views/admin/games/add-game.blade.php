@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			@include('partials.errors')
			<div class="row">
				<div class="col-12">
					<h2>{{ $game->gameType->name . ' ' . $game->meet->date }}</h2>
					<p><a href="{{ route('admin.games.did-not-play', ['id' => $game->id]) }}">Record absentee scores</a></p>
					<p><a href="{{ route('admin.games.record-results', ['id' => $game->id]) }}">Record tournament result</a></p>
					@if(Session::has('info'))
						{{ Session::get('info') }}
					@endif
				</div>
			</div>
		</div>
	</section>
@endsection