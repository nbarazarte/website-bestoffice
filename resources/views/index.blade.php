@extends('app')

@section('content')


		<!-- wrapper -->
		<div id="wrapper">

		<!-- SLIDER -->
		<section id="slider" class=""></section>
			<!-- Top Bar -->
			<div id="topBar">
				<div class="container">

					<ul class="top-links list-inline pull-right">
						
						<li>
							<a class="dropdown-toggle no-text-underline" href=" {{ route('descargar') }}">
								<i class="fa fa-cloud-download" aria-hidden="true"></i> Planilla de Registro
							</a>
						</li>
					</ul>

					<!-- right -->
					<!--
					<ul class="top-links list-inline pull-right">
						<li class="text-welcome hidden-xs">Bienvenido a Best Office, <strong>Neil Barazarte</strong></li>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><i class="fa fa-user hidden-xs"></i> Mi Cuenta</a>
							<ul class="dropdown-menu pull-right">
								<li><a tabindex="-1" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Comprar</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#"><i class="fa fa-list-ol" aria-hidden="true"></i> Lista de Compras</a></li>
								<li><a tabindex="-1" href="#"><i class="fa fa-cog"></i> Configuración</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#"><i class="glyphicon glyphicon-off"></i> Salir</a></li>
							</ul>
						</li>
					</ul>
					-->

					<!-- left -->
					<ul class="top-links list-inline">
						<li class="hidden-xs"><a href="#">IDIOMA</a></li>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><img class="flag-lang" src="smarty/HTML/assets/images/flags/es.png" width="16" height="11" alt="lang" /> ESPAÑOL</a>

							<!--
							<ul class="dropdown-langs dropdown-menu">
								<li><a tabindex="-1" href="#"><img class="flag-lang" src="smarty/HTML/assets/images/flags/us.png" width="16" height="11" alt="lang" /> INGLÉS</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#"><img class="flag-lang" src="smarty/HTML/assets/images/flags/es.png" width="16" height="11" alt="lang" /> ESPAÑOL</a></li>
	
							</ul>
							-->

						</li>

					</ul>

				</div>
			</div>
			<!-- /Top Bar -->

			@include('menuBotton')

			@include('slider')
		

<!-- 
	INFO BAR 
	outside .container and section
-->
<section class="info-bar info-bar-color" style="background-color: red;">
	<div class="container">

		<div class="row">

			<div class="col-sm-4">
				
				<i class="fa fa-paper-plane" aria-hidden="true"></i>
				<h3>RAPIDEZ DE ENTREGA</h3>
				<p>Despacho directo a la Gran Caracas</p>
			</div>

			<div class="col-sm-4">
				<i class="glyphicon glyphicon-usd"></i>
				<h3>PRECIOS COMPETITIVOS</h3>
				<p>Tenemos un gran surtido de productos</p>
			</div>

			<div class="col-sm-4">
				<i class="fa fa-truck" aria-hidden="true"></i>
				<h3>ENVÍOS AL INTERIOR DEL PAÍS</h3>
				<p>Con reconocidas empresas de flete</p>
			</div>

		</div>

	</div>
</section>
<!-- /INFO BAR -->



			<!-- HOME -->
			<section id="best">
						
				<div class="container text-center">
					
					<h1 class="nomargin size-50 weight-300 wow fadeInUp" data-wow-delay="0.4s">Best Office</h1>
					<p class="lead font-lato size-30 wow fadeInUp" data-wow-delay="0.7s">Presencia en Venezuela y próximamente en Guatemala City</p>
					
					<div class="text-center">
						<p class="lead">
							Tenemos un gran surtido de productos para cubrir sus necesidades de útiles escolares, oficina y papelería al mejor precio del mercado. Realizamos ventas únicamente al mayor con despacho directo a la Gran Caracas. Realizamos la gestión de su envío al interior del país con reconocidas empresas de flete.
						</p>

					</div>



<!-- 
				controlls-over		= navigation buttons over the image 
				buttons-autohide 	= navigation buttons visible on mouse hover only
				
				data-plugin-options:
					"singleItem": true
					"autoPlay": true (or ms. eg: 4000)
					"navigation": true
					"pagination": true
			-->
			<div class="text-center margin-top-30 margin-bottom-30">
				<div class="owl-carousel nomargin" data-plugin-options='{"items":6, "singleItem": false, "autoPlay": true}'>
					<div>
						<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/domesa.png" alt="">
					</div>
					<div>
						<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/tealca.png" alt="">
					</div>
					<div>
						<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/mailBoxes.png" alt="">
					</div>
					<div>
						<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/mrw.png" alt="">
					</div>
					<div>
						<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/domesa.png" alt="">
					</div>
					<div>
						<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/tealca.png" alt="">
					</div>
					<div>
						<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/mailBoxes.png" alt="">
					</div>
					<div>
						<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/mrw.png" alt="">
					</div>
				</div>
			</div>

			<div class="row margin-top-100 text-left">

				<div class="col-sm-8">
					<img class="img-responsive" src="smarty/HTML/assets/images/demo/background-2091.jpg" alt="product image" />
				</div>

				<div class="col-sm-4">
					<h3 class="weight-300">Calidad y <span>Rendimiento</span></h3>
				
					<p style="text-align: justify;">Ofrecemos a las micro, pequeñas, medianas y grandes empresas, así como negocios y particulares productos de alta calidad y rendimiento, respaldados 100% por nuestros fabricantes, comprometidos con la excelencia, enfocados en la satisfacción del cliente, por ello, nuestro equipo de expertos siempre ofrecerá el mejor servicio y esmero en dar la confianza que todo proveedor debe otorgar a sus clientes.</p>

					<p style="text-align: justify;">Queremos ser tu aliado ya que contamos con el respaldo de los mejores fabricantes, no te hará falta nada para ser mejor y más eficiente.</p>
					
					<hr />


				</div>
			</div>

		</div>



			<!-- -->
			<section class="alternate">
				<div class="container">
				
					<div class="row">

						<div class="col-md-4">

							<div class="box-icon box-icon-side box-icon-color box-icon-round">
								<i class="fa fa-map" aria-hidden="true"></i>
								<a class="box-icon-title" href="#">
									<h2>Misión</h2>
								</a>
								<p style="text-align: justify;">Satisfacer las necesidades de abastecimiento, con nuevas y mejores alternativas, ampliando cada día nuestra gama de productos, brindando confianza y a su vez obtener desarrollo y prestigio en el mercado.</p>
								
							</div>

						</div>

						<div class="col-md-4">

							<div class="box-icon box-icon-side box-icon-color box-icon-round">
								<i class="fa fa-eye" aria-hidden="true"></i>
								<a class="box-icon-title" href="#">
									<h2>Visión</h2>
								</a>
								<p style="text-align: justify;">Ser una organización líder e innovadora en el mercado con cobertura nacional e imágen internacional en la comercialización de suministros de oficina y útiles escolares, reconocida por su excelencia en el servicio, productos de alta calidad, y responsabilidad social empresarial.</p>
								
							</div>

						</div>

						<div class="col-md-4">

							<div class="box-icon box-icon-side box-icon-color box-icon-round">
								<i class="fa fa-trophy" aria-hidden="true"></i>
								<a class="box-icon-title" href="#">
									<h2>Valores</h2>
								</a>
								<p style="text-align: justify;">Honestidad, Responsabilidad, Calidad, Respeto, Lealtad y Eficiencia.</p>
								
							</div>

						</div>

					</div>

				</div>
			</section>
			<!-- / -->

			</section>
			<!-- /HOME -->


			
			@include('marcas')

			@include('productos')

			<!--
				@ include('promociones')
			-->
			@include('redes')

			@include('contactanos')
			

		</div>
		<!-- /wrapper -->


