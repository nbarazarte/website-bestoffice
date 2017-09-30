<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Best Office</title>
		<meta name="keywords" content="" />
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
		{!! Html::style('smarty/HTML/assets/plugins/slider.revolution/css/extralayers.css') !!}
		{!! Html::style('smarty/HTML/assets/plugins/slider.revolution/css/settings.css') !!}

		<!-- THEME CSS -->
		{!! Html::style('smarty/HTML/assets/css/essentials.css') !!}
		{!! Html::style('smarty/HTML/assets/css/layout.css') !!}

		<!-- PAGE LEVEL SCRIPTS -->
		{!! Html::style('smarty/HTML/assets/css/header-1.css') !!}
		{!! Html::style('smarty/HTML/assets/css/layout-shop.css') !!}
		{!! Html::style('smarty/HTML/assets/css/color_scheme/green.css') !!}
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

			<a class="slidetop-toggle" href="#"><!-- toggle button --></a>

		</div>
		<!-- /SLIDE TOP -->


		@yield('content')


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


		<!-- PAGE LEVEL SCRIPTS -->
		{!! Html::script('smarty/HTML/assets/js/view/demo.shop.js') !!}

	</body>
</html>