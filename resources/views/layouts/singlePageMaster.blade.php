<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta name="viewport" content="width=device-width initial-scale=1.0" charset="UTF-8">
		<title> @yield('title') </title>

		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/font-awesome/css/all.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/font-awesome/css/all.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/singlePageStyles.css') }}">
	</head>

	<body>
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
							@yield('page-title')
						</div>

					</header>
				</div>
			</div>
			<!-- END ROW -->
		</div>
		<!-- END CONTAINER -->
		
		<!-- BEGIN CONTAINER -->
		<div class="container-fluid">
			<div class="row display-flex">
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 main-row">
					@yield('content') 		
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 first_column">
					@yield('first_column')
				</div>

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
					@yield('second_column')
				</div>

			</div>
		</div>
		<!-- END CONTAINER -->
		
		<!--
		<footer class="footer">
		
			<div class="footer__logo-box">
				<img src="assets/img/logo/logo.PNG" alt="Logo" class="footer__logo">
			</div>

		</footer> -->
	</body>

</html>