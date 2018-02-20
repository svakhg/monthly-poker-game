@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Buy-Ins</h2>
					<p>The following buy-ins are already available (checkmarks indicate active):</p>
					<form action="{{ route('admin.settings.update-game-buy-in') }}" method="POST">
						@foreach($buyIns as $buyIn)
							<div class="form-group">
								<div class="form-check">
									<input class="form-check-input" id="{{ $buyIn->id }}" name="{{  $buyIn->id }}" type="checkbox" value="{{ $buyIn->id }}" {{ $buyIn->active ? 'checked' : '' }}>
									<label class="form-check-label" for="{{ $buyIn->id }}">{{ $buyIn->amount }}</label>
								</div>
							</div>
						@endforeach
						<div class="form-group">
							<label for="amount">Add a buy-in</label>
							<input class="form-control form-control-sm" id="amount" name="amount" type="text">
						</div>
						<div class="form-group">
							<input name="_token" type="hidden" value="{{ csrf_token() }}">
							<button class="btn btn-primary form-control form-control-sm" type="submit">Add buy-in amount</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection