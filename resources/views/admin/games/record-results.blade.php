@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			@include('partials.errors')
			<div class="row">
				<div class="col-12 col-sm-12">
					<form action="{{ route('admin.games.update-record-results') }}" method="POST">
						@foreach($awards as $award)
							<div class="form-group form-row">
								<label for="{{ $award->id }}">{{ $award->finish_position . ' ' . 'place' }}</label>
								<select class="form-control" name="{{ $award->id }}">
									@foreach($players as $member)
										<option value="{{ $member->id }}">{{ $member->first_name . ' ' . $member->last_name }}</option>
									@endforeach
								</select>
							</div>
						@endforeach
						<input name="game_id" type="hidden" value="{{ $game->id }}">
						{{ csrf_field() }}
						<div class="form-group form-row">
							<button class="btn btn-primary" type="submit">Save results</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection