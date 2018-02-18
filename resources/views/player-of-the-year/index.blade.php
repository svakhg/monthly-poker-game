@extends('layouts.master')

@section('content')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-8">
					<table class="table table-sm">
						<tr>
							<th>Player</th>
							<th>POY Points</th>
							<th>Total Points</th>
						</tr>
						@foreach($playerPoints as $playerPoint)
							<tr>
								<td>{{ $playerPoint['player'] }}</td>
								<td>{{ $playerPoint['poyPoints'] }}</td>
								<td>{{ $playerPoint['totalPoints'] }}</td>
							</tr>
						@endforeach
					</table>
				</div>
				<div class="col-4">
					<form action="{{ route('player-of-the-year.get-season') }}" method="POST">
						<div class="form-group">
							<label for="season_id">View a previous seasons results</label>
							<select class="form-control form-control-sm" name="season_id">
								@foreach($seasons as $season)
									<option value="{{ $season->id }}" {{ $season->id == $currentSeason->id ? 'selected' : '' }}>{{ $season->year }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<input name="_token" type="hidden" value="{{ csrf_token() }}">
							<input class="btn btn-primary" type="submit" value="Go">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection