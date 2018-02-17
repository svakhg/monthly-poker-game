@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<form action="{{ route('admin.settings.members.update') }}" method="POST">
						<div class="form-group">
							<label for="first_name">First Name</label>
							<input class="form-control form-control-sm" name="first_name" type="text" value="{{ $member->first_name }}">
						</div>
						<div class="form-group">
							<label for="last_name">Last Name</label>
							<input class="form-control form-control-sm" name="last_name" type="text" value="{{ $member->last_name }}">
						</div>
						<div class="form-check">
							<input class="form-check-input" id="activeCheckbox" name="active" type="checkbox" {{ $member->active ? 'checked' : '' }}>
							<label class="form-check-label" for="activeCheckbox">Active</label>
						</div>
						<div class="form-group">
							<input type="hidden" name="id" value="{{ $member->id }}">
							<input name="_token" type="hidden" value="{{ csrf_token() }}">
							<button class="btn btn-primary form-control" type="submit">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection