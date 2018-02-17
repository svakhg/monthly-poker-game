@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12">
					<form action="{{ route('admin.settings.members.create') }}" method="post">
						<div class="form-row">
							<div class="form-group col-12 col-sm-12">
								<label for="first_name">First Name</label>
								<input class="form-control" name="first_name" type="text">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-12 col-sm-12">
								<label for="last_name">Last Name</label>
								<input class="form-control" name="last_name" type="text">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-12 col-sm-12">
								<label for="address">Address</label>
								<input class="form-control" name="address" type="text">
							</div>
						</div>
						<input name="_token" type="hidden" value="{{ csrf_token() }}">
						<div class="form-row">
							<div class="form-group col-12 col-sm-12">
								<input type="submit" value="Add member">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection