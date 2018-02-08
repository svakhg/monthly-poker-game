@extends('layouts.master')

@section('content')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-8 col-sm-8">
					<table class="table">
						<caption>Current MPG Members</caption>
						<tr>
							<th colspan="2">Name</th>
						</tr>
						@foreach($members as $member)
						<tr>
							<td><a href="{{ route('members.member', ['id' => $member->id]) }}">{{ $member->first_name . ' ' . $member->last_name }}</a></td>
						</tr>
						@endforeach
					</table>
				</div>
				<div class="col-4 col-sm-4">
				</div>
			</div>
		</div>
	</section>
@endsection