@extends('layouts.singlePageMaster')

@section('content')
	<!-- BEGIN CONTAINER -->
	<div class="container-fluid">
		<!-- BEGIN ROW -->
		<div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
				<header class="header-page">
					<!-- BEGIN LOGO ROW -->
					<div class="row">	
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
							<div class="logo">	
								<!-- BEGIN NAV SECTION -->
								<nav>
									<a href="{{ route('index') }}">
										<div class="logo-box"> <img src="assets/img/logo/sitelogo.png" alt="Logo" class="logo"> </div>
									</a>
								</nav>
								<!-- END NAV SECTION -->
							</div>
						</div>
					</div>
					<!-- END LOGO ROW -->
					
					<!-- BEGIN TITLE ROW -->
					<div class="row">	
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="header-title">	
								Services
							</div>
						</div>
					</div>
					<!-- END TITLE ROW -->

				</header>
			</div>
		</div>
		<!-- END ROW -->
	</div>
	<!-- END CONTAINER -->
@endsection