@extends('layouts.master')

@section('content')
	<main>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<!--
						<a href="{{ route('admin.index') }}">Admin</a>
						
						
						<a href="{{ route('members.index') }}">Members</a>
-->
						<p><a href="{{ route('meets.index') }}">Schedule</a></p>
						<p><a href="{{ route('player-of-the-year.index') }}">Player of the year</a></p>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection