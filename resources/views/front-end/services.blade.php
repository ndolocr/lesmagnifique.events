@extends('layouts.singlePageMaster')

@section('content')

	<!-- BEGIN CONTAINER -->
	<div class="container-fluid">
		<!-- BEGIN EVENTS ROW -->
		<div class="row">
			<!-- BEGIN CHECK FOR AVAILABLE EVENTS -->
			@if($services)
	
				<!-- BEGIN LOOP TO DISPLAY EVENT INFORMATION -->
				@foreach($services as $service)
					<a href="">
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<div class="feature-box">
								<i class="{{ $service->icon }} feature-box__icon"></i>
								<h3 class="heading-tertiary u-margin-bottom-small"> {{ $service->name }} </h3>
								<p class="feature-box__text"> {!! $service->description !!} </p>
							</div>
						</div>
					</a>
					@endforeach
				<!-- END LOOP TO DISPLAY EVENT INFORMATION -->

			@endif
			<!-- END CHECK FOR AVAILABLE EVENTS -->

		</div>
		<!-- END EVENTS ROW -->

	</div>
	<!-- END CONTAINER -->
@endsection