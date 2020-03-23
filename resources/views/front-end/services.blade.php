@extends('layouts.singlePageMaster')

@section('content')
	<!-- BEGIN CONTAINER -->
	<div class="container-fluid">
		<!-- BEGIN ROW -->
		<div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
				<header class="header-page">

					<!-- BEGIN CLASS FOR COVER IMAGE -->
					<div class="cover-image"> <img src="storage/assets/img/homepage/1584683134.jpg" alt=""> </div>
					<!-- END CLASS FOR COVER IMAGE -->

					<!-- BEGIN CLASS FOR COVER GRADIENT -->
					<div class="cover-gradient"> </div>
					<!-- END CLASS FOR COVER GRADIENT -->
					
					<!-- BEGIN LOGO SECTION -->
					<div class="logo">	
						<!-- BEGIN NAV SECTION -->
						<nav>
							<a href="{{ route('index') }}">
								<div class="logo-box"> <img src="assets/img/logo/sitelogo.png" alt="Logo" class="logo"> </div>
							</a>
						</nav>
						<!-- END NAV SECTION -->
					</div>
					<!-- END LOGO SECTION -->

					<div class="header-title">
						Services
					</div>

				</header>
			</div>
		</div>
		<!-- END ROW -->
	</div>
	<!-- END CONTAINER -->

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