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
									<li class=""> <!-- class="active" --> <!-- HOME -->

											@if(Route::current()->getName() == 'home')

												<a class="scrollTo" href="#top" >
													INICIO
												</a>

											@elseif(

											(Route::current()->getName() == 'terminos') || 
											(Route::current()->getName() == 'politicas') || 
											(Route::current()->getName() == 'mapa') || 
											(Route::current()->getName() == 'trabaja') ||
											(Route::current()->getName() == 'colorear') ||
											(Route::current()->getName() == 'contacto') 
												
											)
												@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000">
														INICIO
													</a>

												@else

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}">
														INICIO
													</a>

												@endif

											@endif

									</li>

									<li><!-- BEST OFFICE -->

										@if(Route::current()->getName() == 'home')

											<a href="#best">
												BEST OFFICE
											</a>

										@elseif(

											(Route::current()->getName() == 'terminos') || 
											(Route::current()->getName() == 'politicas') || 
											(Route::current()->getName() == 'mapa') || 
											(Route::current()->getName() == 'trabaja') ||
											(Route::current()->getName() == 'colorear') ||
											(Route::current()->getName() == 'contacto') 
											
										)
											@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

												<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#best">
													BEST OFFICE
												</a>

											@else

												<a href="http://{{ $_SERVER['SERVER_NAME'] }}#best">
													BEST OFFICE
												</a>

											@endif

										@endif

									</li>

									<li class="dropdown"><!-- MARCAS -->
										
										@include('opcionesMenuMarcas')

									</li>

									<li><!-- PRODUCTOS -->

										@if(Route::current()->getName() == 'home')

											<a href="#productos">
												PRODUCTOS
											</a>

										@elseif(

											(Route::current()->getName() == 'terminos') || 
											(Route::current()->getName() == 'politicas') || 
											(Route::current()->getName() == 'mapa') || 
											(Route::current()->getName() == 'trabaja') ||
											(Route::current()->getName() == 'colorear') ||
											(Route::current()->getName() == 'contacto') 
											
										)
											@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

												<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#productos">
													PRODUCTOS
												</a>

											@else

												<a href="http://{{ $_SERVER['SERVER_NAME'] }}#productos">
													PRODUCTOS
												</a>

											@endif

										@endif

									</li>

									<!--<li>< ! - - PROMOCIONES - ->

										@if(Route::current()->getName() == 'home')

											<a href="#promociones">
												PROMOCIONES
											</a>

										@elseif(

											(Route::current()->getName() == 'terminos') || 
											(Route::current()->getName() == 'politicas') || 
											(Route::current()->getName() == 'mapa') || 
											(Route::current()->getName() == 'trabaja') ||
											(Route::current()->getName() == 'colorear') ||
											(Route::current()->getName() == 'contacto') 
											
										)
											@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

												<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#promociones">
													PROMOCIONES
												</a>

											@else

												<a href="http://{{ $_SERVER['SERVER_NAME'] }}#promociones">
													PROMOCIONES
												</a>

											@endif

										@endif

									</li>-->

									<li><!-- REDES SOCIALES -->

										@if(Route::current()->getName() == 'home')

											<a href="#redes">
												REDES SOCIALES
											</a>

										@elseif(

											(Route::current()->getName() == 'terminos') || 
											(Route::current()->getName() == 'politicas') || 
											(Route::current()->getName() == 'mapa') || 
											(Route::current()->getName() == 'trabaja') ||
											(Route::current()->getName() == 'colorear') ||
											(Route::current()->getName() == 'contacto') 
											
										)
											@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

												<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#redes">
													REDES SOCIALES
												</a>

											@else

												<a href="http://{{ $_SERVER['SERVER_NAME'] }}#redes">
													REDES SOCIALES
												</a>

											@endif

										@endif

									</li>

									<li><!-- CONTACTO -->

										<a href="{{ route('contacto') }}">
											CONTÁCTANOS
										</a>

									</li>

									<li><!-- COLOREAR -->

										<a href="{{ route('colorear') }}">
											COLOREAR
										</a>

									</li>

								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->