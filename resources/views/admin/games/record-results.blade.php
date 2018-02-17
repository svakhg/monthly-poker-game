@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			@include('partials.errors')
			<div class="row">
				<div class="col-12">
					<form action="{{ route('admin.games.update-record-results') }}" method="POST">
						@foreach($awards as $award)
							<div class="form-group row">
								<label class="col-sm-2" for="{{ $award->id }}">{{ $award->finish_position . ' ' . 'place' }}</label>
								<select class="col-sm-3 form-control form-control-sm" name="{{ $award->id }}">
									@foreach($players as $member)
										<option value="{{ $member->id }}">{{ $member->first_name . ' ' . $member->last_name }}</option>
									@endforeach
								</select>
							</div>
						@endforeach
						<input name="game_id" type="hidden" value="{{ $game->id }}">
						<input name="_token" type="hidden" value="{{ csrf_token() }}">
						<div class="form-group form-row">
							<button class="btn btn-primary" type="submit">Save results</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection