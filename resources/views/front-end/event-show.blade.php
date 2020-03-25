@extends('layouts.singlePageMaster')

@section('page-title') Events @endsection

@section('content')
	<!-- BEGIN CONTAINER -->
	<div class="container-fluid">
		<!-- BEGIN PAGE HEADER ROW -->
		<div class="row heading-row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
								
			</div>
		</div>
		<!-- END PAGE HEADER ROW -->
		<div class="row first_event">

			<!-- BEGIN CHECK FOR FIRST EVENT -->
			@if($event)
				<!-- BEGIN COL FOR EVENT INFROMATION -->
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="first_card">
						<div class="first_card__image">
							<img src="/storage/assets/img/events/{{ $event ->feature_image }}" alt="{{  $event->title }}">
						</div>
					</div>
				</div>
				<!-- END COL FOR EVENT INFROMATION -->
			@endif
			<!-- END CHECK FOR FIRST EVENT -->
		</div>
		<!-- BEGIN FIRST EVENT ROW -->

		<!-- END FIRST EVENT ROW -->
		
		<!-- BEGIN PAGE HEADER ROW -->
		<div class="row heading-row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 event-title"> 
				{{ $event->title }}				
			</div>
		</div>
		<!-- END PAGE HEADER ROW -->

		<!-- BEGIN EVENTS ROW -->
		<div class="row event__tags">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
				<div class="delegates"> Delegates </div>
				<div class="delegates__no"> {{ $event->delegates }} </div>

				<div class="nationalities"> Nationalities </div>
				<div class="nationalities__no"> {{ $event->nationalities }} </div>	

				<div class="date__title"> Start Date </div>
				<div class="date"> {{ date('d-M-Y', strtotime($event->start_date)) }} </div>

				<div class="date__title"> End Date </div>
				<div class="date"> {{ date('d-M-Y', strtotime($event->end_date)) }} </div>

				<div class="clear__float"></div>			
			</div>
		</div>
		<!-- END EVENTS ROW -->

		<!-- BEGIN ROW -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				{!! $event->description !!}
			</div>
		</div>
		<!-- END ROW -->

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
					Events
				</div>

					@foreach($events as $event)
					<a href="{{ route('event-show', $event->id) }}">
						<div class="row event-information">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 event__feature_image">
								<img src="/storage/assets/img/events/{{ $event ->feature_image }}" alt="{{  $event->title }}">
							</div>
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">{{ $event->title }}</div>
						</div>
					</a>
					@endforeach
			<!-- END COUNTRY SECTION -->
		</div>
	</div>
	<!-- END ROW -->

	<!-- BEGIN ROW -->
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<!-- BEGIN COUNTRY SECTION -->
				<div class="service-heading">
					Services
				</div>

					@foreach($services as $service)
					<a href="">
						<div class="row service-information">
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> <i class="{{ $service->icon }}"> </i></div>
							<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">{{ $service->name }}</div>
						</div>
					</a>
					@endforeach
			<!-- END COUNTRY SECTION -->
		</div>
	</div>
	<!-- END ROW -->
@endsection
<!-- END FIRST COLUMN -->