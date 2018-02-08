@extends('layouts.master')

@section('content')
	<main>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<!--
						<a href="{{ route('admin.index') }}">Admin</a>
						
						
						<a href="{{ route('members.index') }}">Members</a>
-->
						<a href="{{ route('meets.index') }}">Schedule</a>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection