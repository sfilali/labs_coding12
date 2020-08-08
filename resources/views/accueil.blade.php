@extends('layouts.index')
@section('content')
	@foreach ($accueils as $accueil)
	
    <!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="{{$accueil->urlmenulogo}}" alt="">
				<p>{{$slogan->slogan}}</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			@foreach ($bannieres as $banniere)
				<div class="item  hero-item" data-bg="{{$banniere->url}}"></div>
			@endforeach
		</div>
	</div>
	<!-- Intro Section -->


	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">

					@foreach ($services->shuffle()->take(3) as $service)
						<div class="col-md-4 col-sm-6">
							<div class="lab-card">
								<div class="icon">
									<i class="{{$icones[($service->icone_id) -1]->class}}"></i>
								</div>
								<h2>{{$service->titre}}</h2>
								<p>{{$service->texte}}</p>
							</div>
						</div>
					@endforeach

				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				@foreach ($presentations as $presentation)
					
				
				<div class="section-title">
					<h2>{!! str_replace(['(=', '=)'], ['<span>', '</span>'], $presentation->titre) !!}</h2>
				</div>
			<div class="row">
					<div class="col-md-6">
						<p>{{$presentation->texteL}}</p>
					</div>
					<div class="col-md-6">
						<p>{{$presentation->texteR}}</p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="#contactus" class="site-btn">{{$presentation->boutton}}</a>
				</div>
				@endforeach
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="img/video.jpg" alt="">
							<a href="{{$videos->url}}" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->


	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>{!! str_replace(['(=', '=)'], ['<span>', '</span>'], $titretestimonials->titre) !!}</h2>
					</div>
					<div class="owl-carousel" id="testimonial-slide">

						<!-- single testimonial -->
						@foreach ($testimonials as $testimonial)
							<div class="testimonial">
								<span>‘​‌‘​‌</span>
								<p>{{$testimonial->commentaire}}</p>
								<div class="client-info">
									<div class="avatar">
										<img src="{{$testimonial->imgurl}}" alt="">
									</div>
									<div class="client-name">
										<h2>{{$testimonial->nom}}</h2>
										<p>{{$testimonial->fonction}}</p>
									</div>
								</div>
							</div>
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->



	<!-- services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>{!! str_replace(['(=', '=)'], ['<span>', '</span>'], $titreservices->titre) !!}</h2>
			</div>
			{{-- @php
				$j = (count($services));
				$totround = 0;
				$page = 0;
			@endphp 
	
			@while ($j > 0)
				@php
					$round = 0;
					$page ++;
				@endphp
				<div class="row page" id="page{{$page}}">
					@for ($i = $j; $i > 0; $i-- && $j--)
						@if ($round != 0 && $round == 9)
							@break
						@endif
						@foreach ($services as $service)
							@if ($i == ($service->id))
								<!-- single service -->
								<div class="col-md-4 col-sm-6">
									<div class="service">
										<div class="icon">
											<i class="{{$icones[($service->icone_id) -1]->class}}"></i>
										</div>
										<div class="service-text">
											<h2>{{$service->titre}} i = {{$i}} ||| </h2>
											<p>{{$service->texte}}</p>
										</div>
									</div>
								</div>

								<!--Quand on imprime un service-->
								@php
									$totround ++;
									$round ++;
								@endphp
							@endif
						@endforeach

					@endfor

				</div>
			@endwhile

			<!-- PAGINATION -->
			<div class="container justify-content-center">
				<nav class="">
					<ul class="pagination justify-content-center">
						
						@for ($i = 1; $i <= $page; $i++)
							<li class="page-item bouton-click"><a class="page-link" href="#{{$i}}">{{$i}}</a></li>
						@endfor
						
					</ul>
				</nav>
			</div>


		--}}



			@php
				$count = count($services);
				$page = 1;
				$whiletimes = 0;
				$loopiteration = 0;
				
			@endphp
			@while ($count > 0)
				{{-- @php
					$loopiteration = 0;
				@endphp --}}
				
			
			<div class="row page" id="{{$page}}">
	

				@foreach ($services as $service)
					@php
						$loopiteration ++;
					@endphp

					@if ($whiletimes > 0)
						<h1>hi</h1>
					@endif

					@if ($loopiteration + (9 * $page) == $service->id)
						<div class="col-md-4 col-sm-6">
							<div class="service">
								<div class="icon">
									<i class="{{$icones[($service->icone_id) -1]->class}}"></i>
								</div>
								<div class="service-text">
									<h2>{{$service->titre}} {{$loop->iteration}}</h2>
									<p>{{$service->texte}}</p>
								</div>
							</div>
						</div>
						@php
							$count --;
							// $loopiteration ++;
						@endphp
						@if ($loopiteration == 9)
							@php
								$page ++;
							@endphp
							@break
						@endif
					@else
						
					@endif
				
				@endforeach
			</div>
			@php
				$whiletimes ++;
			@endphp
			@endwhile
		

			<!-- PAGINATION -->
			<div class="">
				<nav class="d-flex justify-content-center">
					<ul class="pagination justify-content-center">
						@for ($i = 1; $i <= $page; $i++)
							<li class="page-item bouton-click"><a class="page-link text-dark" href="#{{$i}}">{{$i}}</a></li>
						@endfor
					</ul>
				</nav>
			</div>

			{{-- SCRIPT - Pagination --}}
			<script src="js/pagination-service.js"></script>


			<div class="text-center">
				<a href="" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- services section end -->


	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{!! str_replace(['(=', '=)'], ['<span>', '</span>'], $titreteams->titre) !!}</h2>
			</div>
			<div class="row">

				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="{{$teamleft->imgurl}}" alt="">
						<h2>{{$teamleft->nom}}</h2>
						<h3>{{$teamleft->fonction}}</h3>
					</div>
				</div>
					
				<!-- Fixed -->
				<div class="col-sm-4">
					<div class="member">
						<img src="{{$teamfixed->imgurl}}" alt="">
						<h2>{{$teamfixed->nom}}</h2>
						<h3>{{$teamfixed->fonction}}</h3>
					</div>
				</div>
				
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="{{$teamright->imgurl}}" alt="">
						<h2>{{$teamright->nom}}</h2>
						<h3>{{$teamright->fonction}}</h3>
					</div>
				</div>
				

			</div>
		</div>
	</div>
	<!-- Team Section end-->


	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>{!! str_replace(['(=', '=)'], ['<span class="bg-dark">', '</span>'], $ready->titre) !!}</h2>
					<p>{{$ready->soustitre}}</p>
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="/contact" class="site-btn btn-2">{{$ready->bouton}}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Promotion section end-->


	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				@foreach ($contacts as $contact)
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>{!! str_replace(['(=', '=)'], ['<span>', '</span>'], $contact->titre) !!}</h2>
					</div>
					<p>{{$contact->description}}</p>
					<h3 class="mt60">{{$contact->titre2}}</h3>
					<p class="con-item">{{$contact->adresse}} <br> {{$contact->codepostale_ville}} </p>
					<p class="con-item">{{$contact->numero}}</p>
					<p class="con-item">{{$contact->email}}</p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull" id="contactus">
					<form class="form-class" id="con_form">
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="message" placeholder="Message"></textarea>
								<button class="site-btn">{{$contact->bouton}}</button>
							</div>
						</div>
					</form>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- Contact section end-->
	@endforeach
@endsection