@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			@include('partials.errors')
			<div class="row">
				<div class="col-12 col-sm-12">
					<h2>{{ $game->gameType->name . ' ' . $game->meet->date }}</h2>
					<nav>
						<ul>
							<li><a href="{{ route('admin.games.edit-player-count', ['id' => $game->id]) }}">Set player count</a></li>
							<li><a href="{{ route('admin.games.did-not-play', ['id' => $game->id]) }}">Record absentee scores</a></li>
							<li><a href="{{ route('admin.games.record-results', ['id' => $game->id]) }}">Record tournament result</a></li>
						</ul>
					</nav>
					@if(Session::has('info'))
						{{ Session::get('info') }}
					@endif
				</div>
			</div>
		</div>
	</section>
@endsection