@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12">
					<form action="{{ route('admin.members.update') }}" method="POST">
						<div class="form-group">
							<label for="first_name">First Name</label>
							<input class="form-control" name="first_name" type="text" value="{{ $member->first_name }}">
						</div>
						<div class="form-group">
							<label for="last_name">Last Name</label>
							<input class="form-control" name="last_name" type="text" value="{{ $member->last_name }}">
						</div>
						<div class="form-group">
							<input type="hidden" name="id" value="{{ $member->id }}">
							{{ csrf_field() }}
							<button class="btn btn-primary form-control" type="submit">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection