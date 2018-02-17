@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			@include('partials.errors')
			<div class="row">
				<div class="col-12">
					<form action="{{ route('admin.meets.create') }}" method="post">
						<div class="form-group">
							<label for="date">Date</label>
							<input class="form-control form-control-sm" name="date" type="date">
						</div>
						<div class="form-group">
							<label for="season_id">Season Year</label>
							<select class="form-control form-control-sm" name="season_id">
								@foreach($seasons as $season)
									<option value="{{ $season->id }}">{{ $season->year }}</option>
								@endforeach
							</select>
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