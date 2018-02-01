			<!-- Top Bar -->
			<div id="topBar">
				<div class="container">

					<ul class="top-links list-inline pull-right">
						
						<li>
							<a class="dropdown-toggle no-text-underline" href=" {{ route('descargar') }}">
								<i class="fa fa-cloud-download" aria-hidden="true"></i> Registration Form
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
						<li class="hidden-xs"><a href="#">LANGUAJE</a></li>
						<li>


							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><img class="flag-lang" src="../smarty/HTML/assets/images/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a>

							
							<ul class="dropdown-langs dropdown-menu">

							<!--
								<li><a tabindex="-1" href="{{route('homeIngles')}}"><img class="flag-lang" src="smarty/HTML/assets/images/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a></li>

							
								<li class="divider"></li>
							-->
								<li><a tabindex="-1" href="{{route('home')}}"><img class="flag-lang" src="../smarty/HTML/assets/images/flags/es.png" width="16" height="11" alt="lang" /> SPANISH</a></li>
						
	
							</ul>
							

						</li>

					</ul>

				</div>
			</div>
			<!-- /Top Bar -->

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
			<div id="header" class="sticky header-sm  clearfix">

				@include('en.opcionesMenu')

			</div>