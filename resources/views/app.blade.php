<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>BO | Artículos de oficina, material escolar, papelería y toner.</title>
		<meta name="keywords" content="articulos de oficina, articulos escolares, artículos escolares, artículos de oficina, material de oficina, papeleria, papelería, resmas, resma, chamex, paper, hammermill, reprograf, suzano report premium, premium, laser, toner, post it, cuadernos, utiles escolares, útiles escolares, hojas blancas, oficina, marcadores, libretas, cuaderno, libreta, impresoras, hp, canon, samsung, epson." />
		<meta name="description" content="" />
		<meta name="Author" content="Neil Barazarte [ezebarazarte@gmail.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />


		<!-- CORE CSS -->
		{!! Html::style('smarty/HTML/assets/plugins/bootstrap/css/bootstrap.min.css') !!}

		<!-- REVOLUTION SLIDER -->
		
		{!! Html::style('smarty/HTML/assets/plugins/slider.revolution/css/settings.min.css') !!}

		<!-- THEME CSS -->
		{!! Html::style('smarty/HTML/assets/css/essentials.min.css') !!}
		{!! Html::style('smarty/HTML/assets/css/layout.min.css') !!}

		<!-- PAGE LEVEL SCRIPTS -->
		
		
		{!! Html::style('smarty/HTML/assets/css/color_scheme/green.min.css') !!}

		<link rel="icon" href="{{ asset('smarty/HTML/assets/images/favicon.png') }}" type="image/x-icon"/>
		<link rel="shortcut icon" href="{{ asset('smarty/HTML/assets/images/favicon.png') }}" type="image/x-icon"/>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109061590-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-109061590-1');
		</script>

	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="HTML/assets/images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">

		<!-- SLIDE TOP -->
		<!--
		<div id="slidetop">

			<div class="container">
				
				<div class="row">

					<div class="col-md-4">
						<h6><i class="icon-heart"></i> WHY SMARTY?</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. </p>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-attachment"></i> RECENTLY VISITED</h6>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> This is a very long text, very very very very very very very very very very very very </a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Dolor sit amet,consectetur adipiscing elit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet,consectetur adipiscing elit</a></li>
						</ul>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-envelope"></i> CONTACT INFO</h6>
						<ul class="list-unstyled">
							<li><b>Address:</b> PO Box 21132, Here Weare St, <br /> Melbourne, Vivas 2355 Australia</li>
							<li><b>Phone:</b> 1-800-565-2390</li>
							<li><b>Email:</b> <a href="mailto:support@yourname.com">support@yourname.com</a></li>
						</ul>
					</div>

				</div>

			</div>

			<a class="slidetop-toggle" href="#"> -- toggle button -- </a>

		</div>
	-->
		<!-- /SLIDE TOP -->

		@yield('content')

		@include('footer')

		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>

		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->

		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'smarty/HTML/assets/plugins/';</script>


		{!! Html::script('smarty/HTML/assets/plugins/jquery/jquery-2.1.4.min.js') !!}

		{!! Html::script('smarty/HTML/assets/js/scripts.js') !!}
		
		<!-- REVOLUTION SLIDER -->
		{!! Html::script('smarty/HTML/assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js') !!}
		{!! Html::script('smarty/HTML/assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js') !!}
		{!! Html::script('smarty/HTML/assets/js/view/demo.revolution_slider.js') !!}


		@if ((Route::current()->getName() == 'home') || (Route::current()->getName() == 'trabaja'))
			<!-- 
				GMAP.JS 
				http://hpneo.github.io/gmaps/
			-->
			<script type="text/javascript" src="//maps.google.com/maps/api/js?key=AIzaSyDn4Fqtci9trC4i6iJjbC-UfdnwONchtQ0"></script>

			{!! Html::script('smarty/HTML/assets/plugins/gmaps.min.js') !!}
			<script type="text/javascript">

				jQuery(document).ready(function(){

					/**
						@BASIC GOOGLE MAP
					**/
					var map2 = new GMaps({
						div: '#map2',
						lat: 10.498705,
						lng: -66.788824,
						scrollwheel: false
					});

					var marker = map2.addMarker({
						lat: 10.498705,
						lng: -66.788824,
						title: 'best office'
					});

				});

			</script>

		@endif
{!! Html::style('smarty/HTML/assets/css/layout-shop.min.css') !!}
	</body>
</html>