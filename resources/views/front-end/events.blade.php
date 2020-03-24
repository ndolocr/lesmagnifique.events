@extends('layouts.singlePageMaster')

@section('page-title') Events @endsection
@section('content')

	<!-- BEGIN CONTAINER -->
	<div class="container-fluid">
		<!-- BEGIN EVENTS ROW -->
		<div class="row">
			<!-- BEGIN CHECK FOR AVAILABLE EVENTS -->
			@if($events)
	
				<!-- BEGIN LOOP TO DISPLAY EVENT INFORMATION -->
				@foreach($events as $event)
					<!-- BEGIN COL FOR EVENT INFROMATION -->
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<div class="card">
							<a href="{{ route('event-show', $event->id)}}">
								<div class="card__image">
									<img src="/storage/assets/img/events/{{ $event ->feature_image }}" alt="{{  $event->title }}">

								</div>
							</a>
						
							<div class="card__title">
								<a href="{{ route('event-show', $event->id)}}"> {{ $event->title }} </a>
							</div>

							
							
						</div>
					</div>
					<!-- END COL FOR EVENT INFROMATION -->
				@endforeach
				<!-- END LOOP TO DISPLAY EVENT INFORMATION -->

			@endif
			<!-- END CHECK FOR AVAILABLE EVENTS -->

		</div>
		<!-- END EVENTS ROW -->

	</div>
	<!-- END CONTAINER -->
@endsection