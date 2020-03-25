@extends('layouts.singlePageMaster')

@section('page-title') Events @endsection
@section('content')

	<!-- BEGIN CONTAINER -->
	<div class="container-fluid">
		<!-- BEGIN PAGE HEADER ROW -->
		<div class="row heading-row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
				<div class="head">Recent Event</div>
				<div class="tail"></div>
				<div class="tail"></div>
				<div class="tail"></div>
				<div class="tail"></div>
				<div class="tail"></div>
				<div class="tail"></div>				
			</div>
		</div>
		<!-- END PAGE HEADER ROW -->
		<div class="row first_event">

			<!-- BEGIN CHECK FOR FIRST EVENT -->
			@if($events)
				<!-- BEGIN LOOP TO DISPLAY EVENT INFORMATION -->
				@foreach($first_event as $first)
					<!-- BEGIN COL FOR EVENT INFROMATION -->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="first_card">
							<a href="{{ route('event-show', $first->id)}}">
								<div class="first_card__image">
									<img src="/storage/assets/img/events/{{ $first ->feature_image }}" alt="{{  $first->title }}">

								</div>
							</a>
						
							<div class="first_card__title">
								<div class="date"> {{ date('d-M-Y', strtotime($first->start_date)) }} </div> 
								<div class="country"> <i class="fa fa-flag"></i> KE</div>
								<br>
								{{ $first->title }}
							</div>

							<!-- <div class="card__tint"></div> -->
							
						</div>
					</div>
					<!-- END COL FOR EVENT INFROMATION -->
				@endforeach
				<!-- END LOOP TO DISPLAY EVENT INFORMATION -->

			@endif
			<!-- END CHECK FOR FIRST EVENT -->
		</div>
		<!-- BEGIN FIRST EVENT ROW -->

		<!-- END FIRST EVENT ROW -->
		
		<!-- BEGIN PAGE HEADER ROW -->
		<div class="row heading-row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
				<div class="head">Other Events</div>
				<div class="tail"></div>
				<div class="tail"></div>
				<div class="tail"></div>
				<div class="tail"></div>
				<div class="tail"></div>
				<div class="tail"></div>				
			</div>
		</div>
		<!-- END PAGE HEADER ROW -->

		<!-- BEGIN EVENTS ROW -->
		<div class="row other_events">

			<!-- BEGIN CHECK FOR AVAILABLE EVENTS -->
			@if($events)
				<!-- BEGIN LOOP TO DISPLAY EVENT INFORMATION -->
				@foreach($events as $event)
					<!-- BEGIN COL FOR EVENT INFROMATION -->
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
						<div class="card">
							<a href="{{ route('event-show', $event->id)}}">
								<div class="card__image">
									<img src="/storage/assets/img/events/{{ $event ->feature_image }}" alt="{{  $event->title }}">

								</div>
							</a>
						
							<div class="card__title">
								<div class="date"> {{ date('d-M-Y', strtotime($event->start_date)) }} </div> 
								<div class="country"> <i class="fa fa-flag"></i> KE</div>
								<br>
								{{ $event->title }}
							</div>

							<!-- <div class="card__tint"></div> -->

							
							
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

<!-- BEGIN FIRST COLUMN -->
@section('first_column')
	<!-- BEGIN ROW -->
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<!-- BEGIN COUNTRY SECTION -->
				<div class="category-heading">
					All Categories
				</div>

					@foreach($events as $inf)
					<div class="row category-information">
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">Kenya</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 number"> 20 </div>
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"> </div>
					</div>
					@endforeach
			<!-- END COUNTRY SECTION -->
		</div>
	</div>
	<!-- END ROW -->

	<!-- BEGIN ROW -->
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<!-- BEGIN COUNTRY SECTION -->
				<div class="category-heading">
					All Categories
				</div>

					@foreach($events as $inf)
					<div class="row category-information">
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">Kenya</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 number"> 20 </div>
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"> </div>
					</div>
					@endforeach
			<!-- END COUNTRY SECTION -->
		</div>
	</div>
	<!-- END ROW -->
@endsection
<!-- END FIRST COLUMN -->

<!-- BEGIN SECOND COLUMN -->
@section('second_column')
	Second Section
@endsection
<!-- END SECOND COLUMN -->