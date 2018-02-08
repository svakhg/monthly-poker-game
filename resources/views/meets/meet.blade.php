@extends('layouts.master')

@section('content')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-8 col-sm-8">
					<table class="table">
						<caption>Schedule</caption>
						<tr>
							<th>Date</th>
							<th>Host</th>
							<th>Location</th>
							<th></th>
						</tr>
						<tr>
							<td>{{ $meet->date }}</td>
							<td>{{  }}</td>
							<td>{{  }}</td>
							<td></td>
						</tr>
					</table>
				</div>
				<div class="col-4 col-sm-4">
				</div>
			</div>
		</div>
	</section>
@endsection