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
					<a class="btn btn-primary" href="{{ route('admin.settings.members.create') }}">Add a player</a>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<table class="table table-sm">
						<tr>
							<th>Name</th>
							<th colspan="2">Status</th>
						</tr>
						@foreach($members as $member)
							<tr>
								<td>{{ $member->first_name . ' ' . $member->last_name }}</td>
								<td>{{ $member->active ? 'Active' : 'Inactive' }}</td>
								<td><a href="{{ route('admin.settings.members.edit', ['id' => $member->id]) }}">Edit</a></td>
							</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</section>
@endsection