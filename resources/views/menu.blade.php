			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<div id="header" class="sticky bottom header-sm  clearfix">
				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- Logo -->
						<a class="logo pull-left scrollTo" href="#top">
							<img src="smarty/HTML/assets/images/logoBestOffice.png" alt="" />
						</a>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
							<nav class="nav-main">

								<!-- 
									.nav-onepage
									Required for onepage navigation links
									
									Add .external for an external link!
								-->
								<ul id="topMain" class="nav nav-pills nav-main nav-onepage">
									<li class="active"><!-- HOME -->
										<a href="#slider">
											INICIO
										</a>
									</li>

									<li><!-- BEST OFFICE -->
										<a href="#best">
											BEST OFFICE
										</a>
									</li>

									<li class="dropdown"><!-- ABOUT -->
										<a class="dropdown-toggle" href="#marcas">
											MARCAS
										</a>
										<ul class="dropdown-menu">
											<li><a href="#chamex">CHAMEX</a></li>
											<li><a href="#report">SUZANO REPORT PREMIUM</a></li>
											<li><a href="#premium">PREMIUM LASER TONER</a></li>
											<li><a href="#hammermill">HAMMERMILL</a></li>
											<li><a href="#reprograf">REPROGRAF</a></li>
										</ul>
									</li>

									<li><!-- PRODUCTOS -->
										<a href="#productos">
											PRODUCTOS
										</a>
									</li>

									<li><!-- PRODUCTOS -->
										<a href="#promociones">
											PROMOCIONES
										</a>
									</li>

									<li><!-- REDES SOCIALES -->
										<a href="#redes">
											REDES SOCIALES
										</a>
									</li>

									<li><!-- CONTACT -->
										<a href="#contacto">
											CONTÁCTANOS
										</a>
									</li>
								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>



