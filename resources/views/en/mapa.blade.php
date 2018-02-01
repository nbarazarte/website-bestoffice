@extends('en.app')

@section('content')

@include('en.menuTop')

			<!-- 
				PAGE HEADER 
				
				CLASSES:
					.page-header-xs	= 20px margins
					.page-header-md	= 50px margins
					.page-header-lg	= 80px margins
					.page-header-xlg= 130px margins
					.dark			= dark page header

					.shadow-before-1 	= shadow 1 header top
					.shadow-after-1 	= shadow 1 header bottom
					.shadow-before-2 	= shadow 2 header top
					.shadow-after-2 	= shadow 2 header bottom
					.shadow-before-3 	= shadow 3 header top
					.shadow-after-3 	= shadow 3 header bottom
					.light			= light page header
			-->
			<section class="page-header parallax parallax-3" style="background-image:url('../smarty/HTML/assets/images/demo/pencils-452238_1920.jpg')">
				<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<h1>Mapa del Sitio</h1>
					

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="{{ route('homeIngles')}}">Home</a></li>
						<li class="active">Mapa del Sitio</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->
		

			<section>
				<div class="container">		

			<!-- -->
			<section>
				<div class="container">
					
					<div class="heading-title heading-border">
						<h3><span><span class="countTo" data-speed="2000">15</span>+</span> Best Office</h3>
						<p class="font-lato size-17">Nuestras páginas de interés</p>
					</div>

					<div class="row">

						<div class="col-md-4 col-sm-4">
							<ul class="list-unstyled href-reset">
								<li><a href="http://www.solucionesbestoffice.com/#top">Inicio</a></li>
								<li><a href="http://www.solucionesbestoffice.com/#best">Best Office</a></li>
								<li><a href="http://www.solucionesbestoffice.com/#marcas">Marcas</a>

									<ul>
										<li><a href="http://www.solucionesbestoffice.com/#chamex">Chamex</a></li>
										<li><a href="http://www.solucionesbestoffice.com/#report">Suzano Report Premium</a></li>	
										<li><a href="http://www.solucionesbestoffice.com/#reprograf">Reprograf</a></li>
										<li><a href="http://www.solucionesbestoffice.com/#hammermill">Hammermill</a></li>
										<li><a href="http://www.solucionesbestoffice.com/#premium">Premium Laser Toner</a></li>	
									</ul>

								</li>
								<li><a href="http://www.solucionesbestoffice.com/#productos">Productos</a></li>
								<li><a href="http://www.solucionesbestoffice.com/#redes">Redes Sociales</a></li>
								<li><a href="http://www.solucionesbestoffice.com/#contacto">Contáctanos</a></li>
								<li><a href="{{ route('colorear') }}">Colorear</a></li>

								<li><a href="#">De Interés</a>
									<ul>
										<li><a href="{{ route('mapa')}}">Mapa del Sitio</a></li>
										<li><a href="{{ route('trabaja')}}">Trabaja con Nosotros</li>
										<li><a href="{{ route('terminos')}}">Términos del Servicio</a></li>
											
									</ul>
								</li>								
							

							</ul>
						</div>

					</div>

				</div>
			</section>
			<!-- / -->


				</div>
			</section>
			<!-- / -->

@endsection					