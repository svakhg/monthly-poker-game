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
								<td>{{ $playerPoint['player'] }}</a></td>
								<td>{{ $playerPoint['poyPoints'] }}</td>
								<td>{{ $playerPoint['totalPoints'] }}</td>
							</tr>
						@endforeach
					</table>
				</div>
				<div class="col-4">
				</div>
			</div>
		</div>
	</section>
@endsection