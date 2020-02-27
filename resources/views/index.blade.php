<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width initial-scale=1.0" charset="UTF-8">
	<title>Les Magnifique</title>
	

	<link rel="stylesheet" href="assets/font-awesome/css/all.css">
	<link rel="stylesheet" href="assets/font-awesome/css/all.min.css">
	

	<link rel="stylesheet" href="assets/css/styles.css" type="text/css">
</head>
<body>
	
	<header class="header">
		

		<div class="header__img">
			<img src="assets/img/hero/hero.jpg" alt="Header Background Image">
		</div>

		<div class="header__cover">
			
		</div>

		<nav>
			
			<div class="logo-box">
				<img src="assets/img/logo/sitelogo.png" alt="Logo" class="logo">
			</div>
			
			<!--<div class="menu">
				<ul>
					<li> <a href="#"> Home </a> </li>
					<li> <a href="#"> About Us </a> </li>
					<li> <a href="#"> Services </a> </li>
					<li> <a href="#"> Events </a> </li>
					<li> <a href="#"> Contact Us </a> </li>
				</ul>			
			</div> -->
			
		</nav>
		
		<div class="text-box">

			<h1 class="heading-primary">	
				<span class="heading-primary-main"> Magnifique</span>	
				<span class="heading-primary-sub"> Organizers for all your events</span>
			</h1>

			<a href="#about" class="btn btn-white"> About us </a>

		</div>

	</header>
	
	<main>

		<section class="section-about">
			<div id="about">
				<div class="u-center-text u-margin-bottom-big">
					<h2 class="heading-secondary">
						About Les Magnifique
					</h2>
				</div>

				<div class="row">
					<div class="col-1-of-2"> 
						<h3 class="heading-tertiary u-margin-bottom-small"> Quality of service </h3>
						<p class="paragraph">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus nostrum aperiam, porro qui velit. Rerum fuga nisi saepe, aspernatur laboriosam ex, nostrum, suscipit beatae maiores neque quam cum, ut sapiente.
						</p>

						<h3 class="heading-tertiary u-margin-bottom-small"> All in one </h3>
						<p class="paragraph">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus nostrum aperiam, porro qui velit. Rerum fuga nisi saepe, aspernatur laboriosam ex, nostrum, suscipit beatae maiores neque quam cum, ut sapiente.
						</p>
		
						<a href="#" class="btn-text">Learn More &rarr;</a>

					</div>

					<div class="col-1-of-2"> 
						
						<div class="composition">
							<img src="assets/img/about/image1.jpg" alt="Image One" class="composition__photo composition__photo--p1">
							<img src="assets/img/about/image2.jpg" alt="Image Two" class="composition__photo composition__photo--p2">
							<img src="assets/img/about/image4.jpg" alt="Image three" class="composition__photo composition__photo--p3">
						</div>
					</div>

				</div>
			</div>
		</section>
		
		@if($services)
			<section class="section-feature">
				
				<div class="row">
					@foreach($services as $service)
						<div class="col-1-of-4">
							<div class="feature-box">
								<i class="{{ $service->icon }} feature-box__icon"></i>
								<h3 class="heading-tertiary u-margin-bottom-small"> {{ $service->name }} </h3>
								<p class="feature-box__text"> {!! $service->description !!} </p>
							</div>
						</div>
					@endforeach
					
				</div>

				</div>

			</section>
		@endif
		
		<!-- CHECK IF EVENTS ARE AVAILABLE -->
		@if($events)
			
			<!-- BEGIN EVENTS SECTION -->
			<section class="section-events">
				
				<!-- BEGIN EVENTS SECTION HEADER -->
				<div class="u-center-text u-margin-bottom-big">
					<h2 class="heading-secondary">
						Our recent Events
					</h2>
				</div>
				<!-- END EVENTS SECTION HEADER -->

				<!-- BEGIN EVENTS SECTION -->
				<div class="row">
					
					<!-- BEGIN CARD COLUMN LOOP-->
					@foreach($events as $event)
						
						<!-- BEGIN CARD COLUMN -->
						<div class="col-1-of-3"> 
							<div class="card">
								<div class="card__side card__side--front">
									
									<div class="card__picture">
										<img src="/storage/assets/img/events/{{ $event ->feature_image }}" alt="Feature Image">
									</div>

									<h4 class="card__heading">
										{{ $event->title }}
									</h4>

									<div class="card__details">
										<ul>
											<li> {{ $event->start_date }} </li>
											<li> {{ $event->delegates }} Delegates </li>
											<li> {{ $event->nationalities }} Nationalities </li>
										</ul>
									</div>

									<div class="hide__button">
										<a href="" class="btn btn--white__narrow--hide"> view Event </a>
									</div>

								</div>

								<div class="card__side card__side--back card__side--back-one">
									<div class="card__cta">
										<h4> {{ $event->title }} </h4>
										<a href="" class="btn btn--white__narrow"> view Event </a>
									</div>
								</div>		
							</div>
						</div>
						<!-- END CARD COLUMN -->

					@endforeach
					<!-- END CARD COLUMN LOOP-->
					


					<!--
					<div class="col-1-of-3"> 
						<div class="card">
							<div class="card__side card__side--front">
								
								<div class="card__picture">
									<img src="assets/img/events/image3.JPG" alt="Child Immunization">
								</div>

								<h4 class="card__heading">
									Regional Animal Welfare Conference
								</h4>

								<div class="card__details">
									<ul>
										<li> 5 Days </li>
										<li> 120 Delegates </li>
										<li> 12 Nationalities </li>
										<li> 3 Continents </li>
									</ul>
								</div>

								<div class="hide__button">
									<a href="" class="btn btn--white__narrow--hide"> view Event </a>
								</div>

							</div>

							<div class="card__side card__side--back card__side--back-one">
								<div class="card__cta">
									<h4> Regional Animal Welfare Conference </h4>
									<a href="" class="btn btn--white__narrow"> view Event </a>
								</div>
							</div>		
						</div>
					</div>

					<div class="col-1-of-3"> 
						<div class="card">
							<div class="card__side card__side--front">
								
								<div class="card__picture">
									<img src="assets/img/events/image1.JPG" alt="Child Immunization">
								</div>

								<h4 class="card__heading">
									Child Immunization Conference
								</h4>

								<div class="card__details">
									<ul>
										<li> 4 Days </li>
										<li> 220 Delegates </li>
										<li> 23 Nationalities </li>
										<li> 1 Continents </li>
									</ul>
								</div>

								<div class="hide__button">
									<a href="" class="btn btn--white__narrow--hide"> view Event </a>
								</div>

							</div>

							<div class="card__side card__side--back card__side--back-one">
								<div class="card__cta">
									<h4> Child Immunization Conference </h4>
									<a href="" class="btn btn--white__narrow"> view Event </a>
								</div>
							</div>		
						</div>
					</div>

					<div class="col-1-of-3"> 
						<div class="card">
							<div class="card__side card__side--front">
								
								<div class="card__picture">
									<img src="assets/img/events/image5.JPG" alt="Child Immunization">
								</div>

								<h4 class="card__heading">
									LGBTQ Africa Health Conference
								</h4>

								<div class="card__details">
									<ul>
										<li> 2 Days </li>
										<li> 320 Delegates </li>
										<li> 15 Nationalities </li>
										<li> 2 Continents </li>
									</ul>
								</div>

								<div class="hide__button">
									<a href="" class="btn btn--white__narrow--hide"> view Event </a>
								</div>

							</div>

							<div class="card__side card__side--back card__side--back-one">
								<div class="card__cta">
									<h4> LGBTQ Africa Health Conference </h4>
									<a href="" class="btn btn--white__narrow"> view Event </a>
								</div>
							</div>		
						</div>
					</div>
					-->
				</div>
				<!-- END EVENTS SECTION -->

				<div class="u-center-text u-margin-top-big">
					<a href="#" class="btn btn--gold"> View All Events </a>	

			</section>
			<!-- END EVENTS SECTION -->

		@endif
		<!-- END CHECKING IF EVENTS ARE AVAILABLE -->

		<section class="section-contact">
			<div class="row">
				<div class="contact">
					<img src="assets/img/contact/contact.jpg" alt="">

					<div class="contact__cover"> <h2> Contact Form </h2> </div>

					<div class="contact__box contact-title">

						<!-- BEGIN FORM CREATION -->
						 {!! Form::Open( ['action' => 'ContactController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'] ) !!}

							<div class="form__group">

								{{ Form::text('first_name', '', ['class' => 'form__input', 'id' => 'first_name', 'placeholder' => 'First Name', 'required']) }}

							</div>

							<div class="form__group">

								{{ Form::text('last_name', '', ['class' => 'form__input', 'id' => 'last_name', 'placeholder' => 'Last Name', 'required']) }}

							</div>

							<div class="form__group">

								{{ Form::text('email', '', ['class' => 'form__input', 'id' => 'email', 'placeholder' => 'Email', 'required']) }}

							</div>							
					</div>

					<div class="contact__message">
							<div class="form__group">
								<label for="message" class="form__label--message">Message:</label>
								{{ Form::textarea('message', '', ['class' => 'ckeditor form__textarea', 'id' => 'message'], 'required') }}
								
							</div>

							<div class="form__group">
			
								{{  Form::submit('Send', ['class' => 'form__btn btn__submit blue uppercase']) }}
			
							</div>

						{!! Form::close() !!}
            			<!-- END FORM CREATION -->
					</div>
				</div>
			</div>
		</section>

	</main>

	<footer class="footer">
		
		<div class="footer__logo-box">
			<img src="assets/img/logo/logo.PNG" alt="Logo" class="footer__logo">
		</div>

		<div class="row">
			
			<div class="col-1-of-2">
				<div class="footer__navigation">

					<ul class="footer__list">
						<li class="footer__item"><a href="" class="footer__link"> Home  </a></li>
						<li class="footer__item"><a href="" class="footer__link"> About Us </a></li>
						<li class="footer__item"><a href="" class="footer__link"> Services </a></li>
						<li class="footer__item"><a href="" class="footer__link"> Events </a></li>
						<li class="footer__item"><a href="" class="footer__link"> Contact Us </a></li>
					</ul>

				</div>
			</div>
			
			<div class="col-1-of-2">
				
				<div class="footer__navigation social__media--links">
					<ul class="footer__list">
						<li class="footer__item--social">
							<a href="" class="footer__link">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>

						<li class="footer__item--social">
							<a href="" class="footer__link">
								<i class="fab fa-twitter"></i>
							</a>
						</li>

						<li class="footer__item--social">
							<a href="" class="footer__link">
								<i class="fab fa-instagram"></i>
							</a>
						</li>

						<li class="footer__item--social">
							<a href="" class="footer__link">
								<i class="fab fa-google-plus-g"></i>
							</a>
						</li>
						
						<li class="footer__item--social">
							<div class="footer__powered--by">
								Powered by with <i class="fa fa-heart"></i> <a href="">&copy;crndolo</a>
							</div>
						</li>
					</ul>
				</div>

			</div>

		</div>

	</footer>
	<!--
	<div class="grid">
		
		<div class="row">
			<div class="col-1-of-2"> 1 Of 2</div>
			<div class="col-1-of-2"> 1 Of 2 </div>	
		</div>

		<div class="row">
			<div class="col-1-of-3"> 1 Of 3 </div>
			<div class="col-1-of-3"> 1 Of 3 </div>
			<div class="col-1-of-3"> 1 Of 3 </div>
		</div>

		<div class="row">
			<div class="col-1-of-3"> 1 Of 3 </div>
			<div class="col-2-of-3"> 2 Of 3 </div>
		</div>

		<div class="row">
			<div class="col-1-of-4"> 1 Of 4 </div>
			<div class="col-1-of-4"> 1 Of 4 </div>
			<div class="col-1-of-4"> 1 Of 4 </div>
			<div class="col-1-of-4"> 1 Of 4 </div>
		</div>

		<div class="row">
			<div class="col-1-of-4"> 1 Of 4 </div>
			<div class="col-1-of-4"> 1 Of 4 </div>			
			<div class="col-2-of-4"> 2 Of 4 </div>
		</div>

		<div class="row">
			<div class="col-1-of-4"> 1 Of 4 </div>
			<div class="col-3-of-4"> 3 Of 4 </div>
		</div>

	</div>
	-->

	<script src="assets/ckeditor-basic/ckeditor.js"></script>
</body>
</html>