@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12">
					<h2>Players</h2>
					<p><a href="{{ route('admin.settings.members.index') }}">Add, edit, and de-activate player/player information</a></p>
					<h2>Schedule and Scoring</h2>
					<p><a href="{{ route('admin.meets.index') }}">Add, edit, and score dates and games</a></p>
					<h2>Settings</h2>
					<p><a href="{{ route('admin.settings.index') }}">Add a game type, buy-in</a></p>
				</div>
			</div>
		</div>
	</section>
@endsection