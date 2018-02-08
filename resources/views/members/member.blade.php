@extends('layouts.master')

@section('content')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-8">
					<h2>{{ $member->first_name . ' ' . $member->last_name }}</h2>
					<p>Here goes the bio</p>
				</div>
			</div>
		</div>
	</section>
@endsection