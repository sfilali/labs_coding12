@extends('layouts.index')
@section('content')
    <!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Contact</h2>
				<div class="page-links">
					<a href="#">Home</a>
					<span>Contact</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end -->


	<!-- Google map -->
	{{-- <div class="map" id="map-area"></div> --}}
	
	<iframe src="{{$maps->mapsurl}}" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

	<!-- Google map end -->






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