@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			@if(Session::has('info'))
				<div class="row">
					<div class="col-12 col-sm-12">
						<p class="alert alert-info">{{ Session::get('info') }}</p>
					</div>
				</div>
			@endif
			<div class="row">
				<div class="col-12 col-sm-12">
					<a class="btn btn-primary" href="{{ route('admin.members.create') }}">Add a player</a>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-12">
					<table class="table">
						<caption>Players</caption>
						<tr>
							<th colspan="2">Name</th>
						</tr>
						@foreach($members as $member)
						<tr>
							<td>{{ $member->first_name . ' ' . $member->last_name }}</td>
							<td><a href="{{ route('admin.members.edit', ['id' => $member->id]) }}">Update</a></td>
						</tr>
						@endforeach
					</table>
					
					
				</div>
			</div>
		</div>
	</section>
@endsection