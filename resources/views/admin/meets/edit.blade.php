@extends('layouts.admin')

@section('content')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12">
										
						<form action="{{ route('admin.meets.update') }}" method="POST">
						
							<label for="date">Date</label>
							<input name="date" type="date" value="{{ $meet->date }}">
							<label for="member_id">Host</label>
							<select name="member_id">
								@foreach($members as $member)
									<option value="{{ $member->id }}">{{ $member->first_name . ' ' . $member->last_name }}</option>
								@endforeach
							</select>
							<input name="id" type="hidden" value="{{ $meet->id }}">
							{{ csrf_field() }}
							<button class="btn btn-primary" type="submit">Update</button>
						</form>
					
				</div>
			</div>
		</div>
	</section>
@endsection