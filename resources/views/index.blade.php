@extends('app')

@section('content')


		<!-- wrapper -->
		<div id="wrapper">

			<!-- Top Bar -->
			<div id="topBar">
				<div class="container">

					<!-- right -->
					<ul class="top-links list-inline pull-right">
						<li class="text-welcome hidden-xs">Welcome to Smarty, <strong>John Doe</strong></li>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><i class="fa fa-user hidden-xs"></i> MY ACCOUNT</a>
							<ul class="dropdown-menu pull-right">
								<li><a tabindex="-1" href="#"><i class="fa fa-history"></i> ORDER HISTORY</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#"><i class="fa fa-bookmark"></i> MY WISHLIST</a></li>
								<li><a tabindex="-1" href="#"><i class="fa fa-edit"></i> MY REVIEWS</a></li>
								<li><a tabindex="-1" href="#"><i class="fa fa-cog"></i> MY SETTINGS</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li>
							</ul>
						</li>
					</ul>

					<!-- left -->
					<ul class="top-links list-inline">
						<li class="hidden-xs"><a href="page-contact-1.html">CONTACT</a></li>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><img class="flag-lang" src="smarty/HTML/assets/images/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a>
							<ul class="dropdown-langs dropdown-menu">
								<li><a tabindex="-1" href="#"><img class="flag-lang" src="smarty/HTML/assets/images/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#"><img class="flag-lang" src="smarty/HTML/assets/images/flags/de.png" width="16" height="11" alt="lang" /> GERMAN</a></li>
								<li><a tabindex="-1" href="#"><img class="flag-lang" src="smarty/HTML/assets/images/flags/ru.png" width="16" height="11" alt="lang" /> RUSSIAN</a></li>
								<li><a tabindex="-1" href="#"><img class="flag-lang" src="smarty/HTML/assets/images/flags/it.png" width="16" height="11" alt="lang" /> ITALIAN</a></li>
							</ul>
						</li>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#">USD</a>
							<ul class="dropdown-langs dropdown-menu">
								<li><a tabindex="-1" href="#">USD</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#">EUR</a></li>
								<li><a tabindex="-1" href="#">GBP</a></li>
							</ul>
						</li>
					</ul>

				</div>
			</div>
			<!-- /Top Bar -->

		@include('menu')
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
				<p>Tenemos un gran surtido de productos para cubrir sus necesidades</p>
			</div>

			<div class="col-sm-4">
				<i class="fa fa-truck" aria-hidden="true"></i>
				<h3>ENVÍOS AL INTERIOR DEL PAÍS</h3>
				<p>Realizamos la gestión de su envío con reconocidas empresas de flete</p>
			</div>

		</div>

	</div>
</section>
<!-- /INFO BAR -->

<!-- WELCOME -->
<section class="nopadding-bottom">
	<div class="container">
		<header class="text-center margin-bottom-40">
			<h1 class="weight-300">Chamex</h1>
			<h2 class="weight-300 letter-spacing-1 size-13"><span>INTERNATIONAL PAPER</span></h2>
		</header>

		<div class="text-center">
			<p class="lead">
				Es líder global en empaques y papel con operaciones de fabricación en Norteamérica, Europa, Latinoamérica, Rusia, Asia y Norte de África, sus productos, las líneas de papeles para imprimir y escribir Chamex y Chamequito están 100% producidos a partir de cultivos de eucaliptos certificados.
			</p>

			<div class="margin-top-40">
				<img class="img-responsive" src="smarty/HTML/assets/images/demo/index/papelchamex.png" alt="welcome" />
			</div>

		</div>
	</div>
</section>
<!-- /WELCOME -->




			<!-- -->
			<section class="alternate">
				<div class="container">
				
					<div class="row">

						<div class="col-md-4">

							<div class="box-icon box-icon-side box-icon-color box-icon-round">
								<i class="fa fa-tablet"></i>
								<a class="box-icon-title" href="#">
									<h2>Fully Reposnive</h2>
								</a>
								<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
								<a class="box-icon-more font-lato weight-300" href="#">Learn More</a>
							</div>

						</div>

						<div class="col-md-4">

							<div class="box-icon box-icon-side box-icon-color box-icon-round">
								<i class="fa fa-tint"></i>
								<a class="box-icon-title" href="#">
									<h2>Reusable Elements</h2>
								</a>
								<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
								<a class="box-icon-more font-lato weight-300" href="#">Learn More</a>
							</div>

						</div>

						<div class="col-md-4">

							<div class="box-icon box-icon-side box-icon-color box-icon-round">
								<i class="fa fa-cogs"></i>
								<a class="box-icon-title" href="#">
									<h2>Multipurpose</h2>
								</a>
								<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
								<a class="box-icon-more font-lato weight-300" href="#">Learn More</a>
							</div>

						</div>

					</div>

				</div>
			</section>
			<!-- / -->

			<!-- WELCOME -->
			<section>
				<div class="container">

					<div class="row">

						<div class="col-sm-6">
							<header class="margin-bottom-40">
								<h1 class="weight-300">Premium Laser Toner Cartridge</h1>
								<h2 class="weight-300 letter-spacing-1 size-13"><span>CALIDAD, RENDIMIENTO Y COMPATIBILIDAD</span></h2>
							</header>

							<p>Nuestra exclusiva línea de productos de la marca <strong>Premium Laser Toner Cartridge</strong> le ofrece a nuestros clientes la garantía de contar con un producto de la más alta calidad y rendimiento.</p>
							
							<p>Debido a la exitosa compatibilidad con las mas importantes marcas de impresoras como Hp, Samsung, Canon, Epson, entre otras, Premium Laser Toner Cartridge se ha consolidado entre los consumibles líderes del mercado.</p>


							<hr />

							<!-- 
								controlls-over		= navigation buttons over the image 
								buttons-autohide 	= navigation buttons visible on mouse hover only
								
								data-plugin-options:
									"singleItem": true
									"autoPlay": true (or ms. eg: 4000)
									"navigation": true
									"pagination": true
							-->
							<div class="text-center margin-top-30">
								<div class="owl-carousel nomargin" data-plugin-options='{"navigation": false, "pagination": false, "singleItem": false, "autoPlay": 3400, "items":"3"}'>
									<div>
										<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/canon.png" alt="" style="width: 137px">
									</div>
									<div>
										<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/epson.png" alt="" style="width: 137px">
									</div>
									<div>
										<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/samsung.png" alt="" style="width: 137px">
									</div>
									<div>
										<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/hp.png" alt="" style="width: 137px">
									</div>
									<div>
										<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/canon.png" alt="" style="width: 137px">
									</div>
									<div>
										<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/epson.png" alt="" style="width: 137px">
									</div>
									<div>
										<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/samsung.png" alt="" style="width: 137px">
									</div>
									<div>
										<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/hp.png" alt="" style="width: 137px">
									</div>									
									
								</div>
							</div>

						</div>

						<div class="col-sm-6">

							<!-- 
								controlls-over		= navigation buttons over the image 
								buttons-autohide 	= navigation buttons visible on mouse hover only
								
								data-plugin-options:
									"singleItem": true
									"autoPlay": true (or ms. eg: 4000)
									"navigation": true
									"pagination": true
									"transitionStyle":"fadeUp" (fade,backSlide,goDown,fadeUp)
							-->
							<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"singleItem": true, "autoPlay": 3400, "navigation": true, "pagination": true, "transitionStyle":"fadeUp"}'>
								<div>
									<img class="img-responsive" src="smarty/HTML/assets/images/demo/index/toner.png" alt="">
								</div>
								<div>
									<img class="img-responsive" src="smarty/HTML/assets/images/demo/index/toner2.png" alt="">
								</div>
							</div>

						</div>

					</div>
				</div>
			</section>
			<!-- /WELCOME -->


			<!-- PARALLAX -->
			<section class="parallax " style="background-image: url('smarty/HTML/assets/images/demo/paper-184920_1920.jpg');">
				<div class="overlay dark-1"><!-- dark overlay [0 to 9 opacity] --></div>

				<div class="container">



					<div class="owl-carousel text-center owl-testimonial nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": true}'>
							
						<div class="text-center">
							<h3 class="nomargin">Conoce Nuestros Productos</h3>
							<p class="font-lato weight-300 lead nomargin-top">Gran variedad en papelería, artículos de oficina y material escolar.</p>
						</div>

						<div class="text-center">
							<h3 class="nomargin">Las Mejores Marcas</h3>
							<p class="font-lato weight-300 lead nomargin-top">Nuevas y mejores alternativas en productos.</p>
						</div>

					</div>


				</div>

			</section>
			<!-- /PARALLAX -->

			<!-- FEATURED -->
			<section>
				<div class="container">

					<h2 class="owl-featured noborder"><strong>PRODUCTOS</strong> DESTACADOS</h2>
					<div class="owl-carousel featured nomargin owl-padding-10" data-plugin-options='{"singleItem": false, "items": "5", "stopOnHover":false, "autoPlay":4000, "autoHeight": false, "navigation": true, "pagination": false}'>

						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="smarty/HTML/assets/images/demo/shop/products/300x450/20150429_130130.png" alt="shop first image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Chamex Office</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-5 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<!--<div class="shop-item-price">
									$154.00
								</div>-->
								<!-- /price -->
							</div>

								<!-- buttons -->
								<!--<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>-->
								<!-- /buttons -->
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="smarty/HTML/assets/images/demo/shop/products/300x450/20150429_130231.png" alt="shop first image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Chamex Super</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-5 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<!--<div class="shop-item-price">
									$154.00
								</div>-->
								<!-- /price -->
							</div>

								<!-- buttons -->
								<!--<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>-->
								<!-- /buttons -->
						</div>
						<!-- /item -->



						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="smarty/HTML/assets/images/demo/shop/products/300x450/20150429_130705.png" alt="shop first image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Chamex Multi</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-5 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<!--<div class="shop-item-price">
									$154.00
								</div>-->
								<!-- /price -->
							</div>

								<!-- buttons -->
								<!--<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>-->
								<!-- /buttons -->
						</div>
						<!-- /item -->


						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="smarty/HTML/assets/images/demo/shop/products/300x450/20150502_124532.png" alt="shop first image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Chamequito</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-5 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<!--<div class="shop-item-price">
									$154.00
								</div>-->
								<!-- /price -->
							</div>

								<!-- buttons -->
								<!--<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>-->
								<!-- /buttons -->
						</div>
						<!-- /item -->



						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="smarty/HTML/assets/images/demo/shop/products/300x450/colors.png" alt="shop first image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Chamex Colors</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-5 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<!--<div class="shop-item-price">
									$154.00
								</div>-->
								<!-- /price -->
							</div>

								<!-- buttons -->
								<!--<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>-->
								<!-- /buttons -->
						</div>
						<!-- /item -->









						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="smarty/HTML/assets/images/demo/shop/products/300x450/hammermill-multi-purpose.png" alt="shop first image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Hammermill Premium Multi-Purpose</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-5 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<!--<div class="shop-item-price">
									$154.00
								</div>-->
								<!-- /price -->
							</div>

								<!-- buttons -->
								<!--<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>-->
								<!-- /buttons -->
						</div>
						<!-- /item -->



						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="smarty/HTML/assets/images/demo/shop/products/300x450/reprograf2.png" alt="shop first image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Papel Reprograf</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-5 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<!--<div class="shop-item-price">
									$154.00
								</div>-->
								<!-- /price -->
							</div>

								<!-- buttons -->
								<!--<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>-->
								<!-- /buttons -->
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="smarty/HTML/assets/images/demo/shop/products/300x450/report-premium2.png" alt="shop first image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Papel Report Premium</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-5 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<!--<div class="shop-item-price">
									$154.00
								</div>-->
								<!-- /price -->
							</div>

								<!-- buttons -->
								<!--<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>-->
								<!-- /buttons -->
						</div>
						<!-- /item -->



						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="smarty/HTML/assets/images/demo/shop/products/300x450/pelikan2.png" alt="shop first image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Pelikan Texmarket 490</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-5 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<!--<div class="shop-item-price">
									$154.00
								</div>-->
								<!-- /price -->
							</div>

								<!-- buttons -->
								<!--<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>-->
								<!-- /buttons -->
						</div>
						<!-- /item -->






					<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="smarty/HTML/assets/images/demo/shop/products/300x450/postit.png" alt="shop first image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Post It</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-5 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<!--<div class="shop-item-price">
									$154.00
								</div>-->
								<!-- /price -->
							</div>

								<!-- buttons -->
								<!--<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>-->
								<!-- /buttons -->
						</div>
						<!-- /item -->




					<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="smarty/HTML/assets/images/demo/shop/products/300x450/cuaderno-tapa-dura.png" alt="shop first image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Libretas Tapa Dura Medianas</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-5 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<!--<div class="shop-item-price">
									$154.00
								</div>-->
								<!-- /price -->
							</div>

								<!-- buttons -->
								<!--<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>-->
								<!-- /buttons -->
						</div>
						<!-- /item -->

					<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="smarty/HTML/assets/images/demo/shop/products/300x450/cuaderno-A4-22.png" alt="shop first image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Cuaderno A4 80 Hojas</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-5 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<!--<div class="shop-item-price">
									$154.00
								</div>-->
								<!-- /price -->
							</div>

								<!-- buttons -->
								<!--<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>-->
								<!-- /buttons -->
						</div>
						<!-- /item -->













					<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="smarty/HTML/assets/images/demo/shop/products/300x450/toner2.png" alt="shop first image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Toner Premium</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-5 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<!--<div class="shop-item-price">
									$154.00
								</div>-->
								<!-- /price -->
							</div>

								<!-- buttons -->
								<!--<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>-->
								<!-- /buttons -->
						</div>
						<!-- /item -->


						

						

					</div>

				</div>
			</section>
			<!-- /FEATURED -->

















<!-- CALLOUT -->
			<section class="callout-dark heading-title heading-arrow-bottom">
				<div class="container">

					<header class="text-center">
						<h1 class="weight-300 size-40">Promociones</h1>
						<h2 class="weight-300 letter-spacing-1 size-13" style="color: #ffffff"><span>SABEMOS LO QUE BUSCAS</span></h2>
					</header>

				</div>
			</section>
			<!-- /CALLOUT -->




			<!-- WORK -->
			<section class="nopadding">
				<div id="portfolio" class="portfolio-nogutter">
					<div class="row mix-grid">

						<div class="col-md-3 col-sm-3 mix development"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/header_bg_img.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<img class="img-responsive" src="smarty/HTML/assets/images/demo/mockups/600x399/header_bg_img.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Artículos Escolares</h3>

								</div>

							</div>

						</div><!-- /item -->


						<div class="col-md-3 col-sm-3 mix development"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/office-2070806_1920.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<img class="img-responsive" src="smarty/HTML/assets/images/demo/mockups/600x399/office-2070806_1920.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Artículos de Oficina</h3>

								</div>

							</div>

						</div><!-- /item -->


						<div class="col-md-3 col-sm-3 mix photography"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/office-2525669_1920.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<img class="img-responsive" src="smarty/HTML/assets/images/demo/mockups/600x399/office-2525669_1920.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Papelería</h3>

								</div>

							</div>

						</div><!-- /item -->


						<div class="col-md-3 col-sm-3 mix design"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/colorful-2557697_1280.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<img class="img-responsive" src="smarty/HTML/assets/images/demo/mockups/600x399/colorful-2557697_1280.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Lapiceros y Marcadores</h3>
						
								</div>

							</div>

						</div><!-- /item -->


						<div class="col-md-3 col-sm-3 mix development"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/binder-1277032_1920.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<img class="img-responsive" src="smarty/HTML/assets/images/demo/mockups/600x399/binder-1277032_1920.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Cuadernos y Libretas</h3>
			
								</div>

							</div>

						</div><!-- /item -->

						<div class="col-md-3 col-sm-3 mix design"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/office-1021419_1920.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<img class="img-responsive" src="smarty/HTML/assets/images/demo/mockups/600x399/office-1021419_1920.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Artículos Multiuso</h3>

								</div>

							</div>

						</div><!-- /item -->



						<div class="col-md-3 col-sm-3 mix photography"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/20150506_112843.png" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<img class="img-responsive" src="smarty/HTML/assets/images/demo/mockups/600x399/20150506_112843.png" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Papel Chamex Colors</h3>

								</div>

							</div>

						</div><!-- /item -->


						<div class="col-md-3 col-sm-3 mix design"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/HP-80A-CF280A-Black-Laser-Toner-Cartridge-by-MSE.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<img class="img-responsive" src="smarty/HTML/assets/images/demo/mockups/600x399/HP-80A-CF280A-Black-Laser-Toner-Cartridge-by-MSE.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Toner Premium</h3>

								</div>

							</div>

						</div><!-- /item -->

					</div>

				</div>
			</section>
			<!-- /WORK -->













			





			<!-- PARALLAX -->
			<section class="parallax parallax-2" style="background-image: url('smarty/HTML/assets/images/demo/1200x800/paperclip-168336_1920.jpg');">
				<div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<div class="text-center">
						<h3 class="nomargin">Redes Sociales</h3>
						<p class="font-lato weight-300 lead nomargin-top">Síguenos y mantente informado de nuestras ofertas, nuevos productos y servicios</p>
					</div>

					<ul class="margin-top-80 social-icons list-unstyled list-inline" style="margin-left: 80px">
						<li>
								&nbsp;
							<!--<a target="_blank" href="#">
								<i class="fa fa-facebook"></i>
								<h4>Facebook</h4>
								<span>Be Our Friend</span>
							</a>-->
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-twitter"></i>
								<h4>Twitter</h4>
								<span>Follow Us</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-facebook"></i>
								<h4>Facebook</h4>
								<span>Be Our Friend</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-instagram"></i>
								<h4>Instagram</h4>
								<span>See Our Images</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-linkedin"></i>
								<h4>Linkedin</h4>
								<span>Check Our Identity</span>
							</a>
						</li>

						<li>
								&nbsp;
							<!--<a target="_blank" href="#">
								<i class="fa fa-pinterest"></i>
								<h4>Pinterest</h4>
								<span>Check Our Identity</span>
							</a>-->
						</li>
					
					</ul>

				</div>

			</section>
			<!-- /PARALLAX -->




			


			


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
						<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/1.jpg" alt="">
					</div>
					<div>
						<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/2.jpg" alt="">
					</div>
					<div>
						<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/3.jpg" alt="">
					</div>
					<div>
						<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/4.jpg" alt="">
					</div>
					<div>
						<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/5.jpg" alt="">
					</div>
					<div>
						<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/6.jpg" alt="">
					</div>
					<div>
						<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/7.jpg" alt="">
					</div>
					<div>
						<img class="img-responsive" src="smarty/HTML/assets/images/demo/brands/8.jpg" alt="">
					</div>
				</div>
			</div>

			@include('footer')

		</div>
		<!-- /wrapper -->


