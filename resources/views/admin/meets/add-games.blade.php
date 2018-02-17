@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			@include('partials.errors')
			<div class="row">
				<div class="col-12">
					Add a game to the {{ $meet->date }}	MPG
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<form action="{{ route('admin.meets.update-games') }}" method="post">
						<div class="form-group">
							<label for="game_type">Type</label>
							<select class="form-control form-control-sm" name="game_type">
								<option value="">Select game type</option>
								@foreach($gameTypes as $gameType)
									<option value="{{ $gameType->id }}">{{ $gameType->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="game_weight">Weight</label>
							<select class="form-control form-control-sm" name="game_weight">
								<option value="">Select game weight</option>
								@foreach($gameWeights as $gameWeight)
									<option value="{{ $gameWeight->id }}">{{ $gameWeight->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="buy_in">Buy-in</label>
							<select class="form-control form-control-sm" name="game_buy_in">
								<option value="">Select buy-in</option>
								@foreach($gameBuyIns as $gameBuyIn)
									<option value="{{ $gameBuyIn->id }}">$ {{ $gameBuyIn->amount }}</option>
								@endforeach
							</select>
						</div>
						<input name="meet_id" type="hidden" value="{{ $meet->id }}">
						<input name="_token" type="hidden" value="{{ csrf_token() }}">
						<div class="form-group">
							<button class="btn btn-primary" type="submit">Add game</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection