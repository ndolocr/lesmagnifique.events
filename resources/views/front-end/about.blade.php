@extends('layouts.frontEndMaster')

@section('content')
	<header class="page-header">
		
		<img src="assets/img/contact/contact.jpg" alt="">

		<!-- BEGIN HEADER COVER -->
		<div class="page-header__cover">
	
		</div>
		<!-- END HEADER COVER -->

		<!-- BEGIN NAV SECTION -->
		<nav>
			<a href="{{ route('index') }}">
				<div class="logo-box"> <img src="assets/img/logo/sitelogo.png" alt="Logo" class="logo"> </div>
			</a>
		</nav>
		<!-- END NAV SECTION -->

		<!-- BEGIN ABOUT US HEADER -->
		<div class="heading">
			About Us
		</div>
		<!-- END ABOUT US HEADER -->
	</header>
@endsection