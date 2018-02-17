@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Game Types</h2>
					<p>The following game types are already available:</p>
					<form action="{{ route('admin.settings.update-game-type') }}" method="POST">
						<div class="form-group">
							@foreach($gameTypes as $gameType)
								<div class="form-check">
									<input class="form-check-input" id="{{ $gameType->id }}" name="{{  $gameType->id }}" type="checkbox" value="{{ $gameType->id }}" {{ $gameType->active ? 'checked' : '' }}>
									<label class="form-check-label" for="{{ $gameType->id }}">{{ $gameType->name }}</label>
								</div>
							@endforeach
						</div>
						<div class="form-group">
							<label for="name">Add a game type</label>
							<input class="form-control form-control-sm" id="name" name="name" type="text">
						</div>
						<div class="form-group">
							<input name="_token" type="hidden" value="{{ csrf_token() }}">
							<button class="btn btn-primary form-control form-control-sm" type="submit">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection