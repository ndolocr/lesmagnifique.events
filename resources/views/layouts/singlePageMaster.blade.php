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
				
				<!-- BEGIN SECOND COLUMN -->
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
					<!-- BEGIN SOCIAL MEDIA ACCOUNT -->
					<div class="row social__media">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
							<div class="row member__number">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 72,416 </div>
							</div>
							
							<div class="row tags">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
								Followers/Fans/Likes
								</div>
							</div>

							<div class="row social__icons">
								<a href="">	<div class="twitter"> <i class="fab fa-twitter"></i> </div> </a>
								<a href="">	<div class="facebook"> <i class="fab fa-facebook-f"></i> </div>	</a>
								<a href="">	<div class="instagram"> <i class="fab fa-instagram"></i> </div> </a>
								<a href=""> <div class="google"> <i class="fab fa-google-plus-g"></i> </div> </a>
							</div>

						</div>
					</div>
					<!-- END SOCIAL MEDIA ACCOUNT -->	

					<!-- BEGIN SUBSCRIPTION ROW -->
					<div class="row newsletter">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 newsletter__heading">
							Newsletter
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<!-- BEGIN FORM -->
							{!! Form::Open( ['action' => 'ContactController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'] ) !!}
								<div class="form__group">
									{{ Form::text('email', '', ['class' => 'form__input', 'id' => 'email', 'placeholder' => 'Enter your email address...', 'required']) }}
								</div>

								<div class="form__group">
									{{  Form::submit('subscribe', ['class' => 'form__btn btn__submit blue uppercase']) }}
								</div>
							{!! Form::close() !!}
				            <!-- END FORM -->
						</div>

					</div>
					<!-- BEGIN SUBSCRIPTION ROW -->

					<!-- BEGIN SUBSCRIPTION ROW -->
					<div class="row newsletter">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 newsletter__heading">
							Contact Us
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<!-- BEGIN FORM -->
							{!! Form::Open( ['action' => 'ContactController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'] ) !!}
								<div class="form__group">
									{{ Form::text('first_name', '', ['class' => 'form__input', 'id' => 'first_name', 'placeholder' => 'First Name', 'required']) }}
								</div>

								<div class="form__group">
									{{ Form::text('last_name', '', ['class' => 'form__input', 'id' => 'last_name', 'placeholder' => 'Last Name', 'required']) }}
								</div>

								<div class="form__group">
									{{ Form::text('email_address', '', ['class' => 'form__input', 'id' => 'email_address', 'placeholder' => 'Email', 'required']) }}
								</div>

								<div class="form__group">
									{{ Form::textarea('message', '', ['class' => 'form__textarea', 'id' => 'message'], 'required') }}
								</div>

								<div class="form__group">
									{{  Form::submit('Send', ['class' => 'form__btn btn__submit green uppercase']) }}
								</div>
							{!! Form::close() !!}
				            <!-- END FORM -->
						</div>

					</div>
					<!-- BEGIN SUBSCRIPTION ROW -->

				</div>
				<!-- END SECOND COLUMN -->

			</div>
		</div>
		<!-- END CONTAINER -->
		
		<footer class="footer">
		
			<div class="footer__logo-box">
				<img src="assets/img/logo/logo.PNG" alt="Logo" class="footer__logo">
			</div>

		</footer>
	</body>

</html>