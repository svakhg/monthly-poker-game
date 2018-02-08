@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			@include('partials.errors')
			<div class="row">
				<div class="col-12 col-sm-12">
					<form action="{{ route('admin.meets.create') }}" method="post">
						<div class="form-row">
							<div class="form-group col-12 col-sm-12">
								<label for="date">Date</label>
								<input class="form-control" name="date" type="date">
							</div>
						</div>
						<input name="_token" type="hidden" value="{{ csrf_token() }}">
						<div class="form-row">
							<div class="form-group col-12 col-sm-12">
								<input type="submit" value="Add date">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection