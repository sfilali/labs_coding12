@extends('layouts.index')
@section('content')
    	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Services</h2>
				<div class="page-links">
					<a href="#">Home</a>
					<span>Services</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->


	<!-- services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>{!! str_replace(['(=', '=)'], ['<span>', '</span>'], $accueils[0]->titreservices) !!}</h2>

			</div>
			<?php
				$j = (count($services));
				$totround = 0;
				$page = 0;
			?>

			@while ($j > 0)
			<?php
				$round = 0;
				$page ++;

			?>
			
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
									<i class="{{$service->icone}}"></i>
								</div>
								<div class="service-text">
									<h2>{{$service->titre}} i = {{$i}} ||| </h2>
									<p>{{$service->texte}}</p>
								</div>
							</div>
						</div>

						<!--Quand on imprime un service-->
						<?php
							$totround += 1;
							$round += 1;
						?>
						
					@endif
				@endforeach

				@endfor

			</div>
			@endwhile

			<!-- PAGINATION -->
			<div class="container justify-content-center">
				<nav class="">
						<ul class="pagination justify-content-center">
							{{-- <li class="page-item">
								<a class="page-link" href="#" tabindex="-1">Previous</a>
							</li> --}}
							
							@for ($i = 1; $i <= $page; $i++)
								<li class="page-item bouton-click"><a class="page-link" href="#{{$i}}">{{$i}}</a></li>
							@endfor
							
						
							{{-- <li class="page-item">
							<a class="page-link" href="#">Next</a>
							</li> --}}
						</ul>
					</nav>
			</div>


			<script src="js/pagination-service.js"></script>


			<div class="text-center">
				<a href="#services-primes" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- services section end -->


	<!-- features section -->
	<div class="team-section spad" id="services-primes">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{!! str_replace(['(=', '=)'], ['<span>', '</span>'], $servicesprimes->titre) !!}</h2>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 features">
					@foreach ($serviceprimesL as $service)
						<div class="icon-box light left">
							<div class="service-text">
								<h2>{{$service->titre}} {{$service->id}}</h2>
								<p>{{$service->texte}}</p>
							</div>
							<div class="icon">
								<i class="{{$service->icone}}"></i>
							</div>
						</div>
					@endforeach
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach ($serviceprimesR as $service)
						<div class="icon-box light left">
							<div class="service-text">
								<h2>{{$service->titre}} {{$service->id}}</h2>
								<p>{{$service->texte}}</p>
							</div>
							<div class="icon">
								<i class="{{$service->icone}}"></i>
							</div>
						</div>
						
					@endforeach
				</div>
			</div>
			<div class="text-center mt100">
				<a href="#blograpides" class="site-btn">{{$servicesprimes->bouton}}</a>
			</div>
		</div>
	</div>
	<!-- features section end-->


	<!-- services card section-->
	<div id="blograpides" class="services-card-section spad">
		<div class="container">
			<div class="row">
				@foreach ($blograpides as $blog)
					<!-- Single Card -->
					<div class="col-md-4 col-sm-6">
						<div class="sv-card">
							<div class="card-img">
								<img src="{{$blog->imgurl}}" class="img-fluid" alt="">
							</div>
							<div class="card-text">
								<h2>{{$blog->titre}}</h2>
								<p>{{ Str::limit($blog->texte, 100) }}</p>
							</div>
						</div>
					</div>
				@endforeach

			</div>
		</div>
	</div>
	<!-- services card section end-->


	<!-- newsletter section -->
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form class="nl-form">
						<input type="text" placeholder="Your e-mail here">
						<button class="site-btn btn-2">Newsletter</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->


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
@endsection