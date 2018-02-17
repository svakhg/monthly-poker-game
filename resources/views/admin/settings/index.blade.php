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
					<h2>Games &amp; Buy-Ins</h2>
					<p><a href="{{ route('admin.settings.game-type') }}">Add a new game type or activate or deactivate a game type</a></p>
					<p><a href="{{ route('admin.settings.game-buy-in') }}">Add a new buy-in amount or activate or deactivate a buy-in amount</a></p>
					<h2>Members</h2>
					<a href=""></a>
				</div>
			</div>
		</div>
	</section>
@endsection