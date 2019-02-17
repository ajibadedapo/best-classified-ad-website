@extends('main')
@section('content')

	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.blade.php"><i class="fa fa-home home_1"></i></a> / <span>Regions</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Regions -->
	<div class="regions main-grid-border">
		<div class="container">
			<h2 class="w3-head">Location List</h2>
		</div>
		@foreach($states as $state)
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>{{$state->name}} </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						@foreach($state->localGovernments as $lg)
						<li><a>{{$lg['local_name']}}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
			@endforeach
	</div>
	<!-- //Regions -->
@endsection