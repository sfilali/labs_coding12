<!DOCTYPE html>
<html lang="en">
<head>
	<title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="/css/flaticon.css"/>
	<link rel="stylesheet" href="/css/magnific-popup.css"/>
	<link rel="stylesheet" href="/css/owl.carousel.css"/>
	<link rel="stylesheet" href="/css/style.css"/>
	<link rel="stylesheet" href="/css/pagination-services.css">


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>



	<!-- Header section -->
	<header class="header-section">
		@foreach ($accueils as $accueil)
			
		<?php
			$routi = Route::getCurrentRoute()->uri();
			// dd($routi);
		?>

		<div class="logo">
			<img src="{{$accueil->urlmenulogo}}" height="32px" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li class="{{($routi == '/') ? 'active' : ''}}">
				<a href="/">{{$accueil->lien1}}</a>
				</li>
				<li class="{{($routi == 'services') ? 'active' : ''}}">
					<a href="/services">{{$accueil->lien2}}</a>
				</li>
				<li class="{{($routi == 'blog') ? 'active' : ''}}">
					<a href="/blog">{{$accueil->lien3}}</a>
				</li>
				<li class="{{($routi == 'contact') ? 'active' : ''}}">
					<a href="/contact">{{$accueil->lien4}}</a>
				</li>
				<li>
					@if (Route::has('login'))
						@auth
							<a href="{{ url('/home') }}">Back Office</a>
						@else
							<a href="{{ route('login') }}">Login</a>
	
							@if (Route::has('register'))
								<a href="{{ route('register') }}">Register</a>
							@endif
						@endauth
					@endif
				</li>
			</ul>
		</nav>
		@endforeach
	</header>
	<!-- Header section end -->




	
	@yield('content')




	<!-- Footer section -->
	<footer class="footer-section">
		<h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
	</footer>
	<!-- Footer section end -->



    <!--====== Javascripts & Jquery ======-->
	<script src="/js/jquery-2.1.4.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/magnific-popup.min.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
    <script src="/js/circle-progress.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
    <script src="/js/map.js"></script>
	<script src="/js/main.js"></script>

	<script src="/js/nav.js"></script>

</body>
</html>