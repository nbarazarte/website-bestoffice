				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- Logo -->
						<a class="logo pull-left scrollTo" href="#top">
							<img src="../smarty/HTML/assets/images/logoBestOffice.png" alt="" />
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
									<li class=""> <!-- class="active" --> <!-- homeIngles -->

											@if(Route::current()->getName() == 'homeIngles')

												<a class="scrollTo" href="#top" >
													HOME
												</a>

											@elseif(

											(Route::current()->getName() == 'terminosIngles') || 
											(Route::current()->getName() == 'politicasIngles') || 
											(Route::current()->getName() == 'mapaIngles') || 
											(Route::current()->getName() == 'trabajaIngles') ||
											(Route::current()->getName() == 'colorearIngles') 
												
											)
												@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/en">
														HOME
													</a>

												@else

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}/en">
														HOME
													</a>

												@endif

											@endif

									</li>

									<li><!-- BEST OFFICE -->

										@if(Route::current()->getName() == 'homeIngles')

											<a href="#best">
												BEST OFFICE
											</a>

										@elseif(

											(Route::current()->getName() == 'terminosIngles') || 
											(Route::current()->getName() == 'politicasIngles') || 
											(Route::current()->getName() == 'mapaIngles') || 
											(Route::current()->getName() == 'trabajaIngles') ||
											(Route::current()->getName() == 'colorearIngles') 
											
										)
											@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

												<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/en#best">
													BEST OFFICE
												</a>

											@else

												<a href="http://{{ $_SERVER['SERVER_NAME'] }}/en#best">
													BEST OFFICE
												</a>

											@endif

										@endif

									</li>

									<li class="dropdown"><!-- MARCAS -->
										
										@include('en.opcionesMenuMarcas')

									</li>

									<li><!-- PRODUCTOS -->

										@if(Route::current()->getName() == 'homeIngles')

											<a href="#productos">
												PRODUCTS
											</a>

										@elseif(

											(Route::current()->getName() == 'terminosIngles') || 
											(Route::current()->getName() == 'politicasIngles') || 
											(Route::current()->getName() == 'mapaIngles') || 
											(Route::current()->getName() == 'trabajaIngles') ||
											(Route::current()->getName() == 'colorearIngles') 
											
										)
											@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

												<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/en#productos">
													PRODUCTS
												</a>

											@else

												<a href="http://{{ $_SERVER['SERVER_NAME'] }}/en#productos">
													PRODUCTS
												</a>

											@endif

										@endif

									</li>

									<!--<li>< ! - - PROMOCIONES - ->

										@if(Route::current()->getName() == 'homeIngles')

											<a href="#promociones">
												PROMOCIONES
											</a>

										@elseif(

											(Route::current()->getName() == 'terminosIngles') || 
											(Route::current()->getName() == 'politicasIngles') || 
											(Route::current()->getName() == 'mapaIngles') || 
											(Route::current()->getName() == 'trabajaIngles') ||
											(Route::current()->getName() == 'colorearIngles') 
											
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

										@if(Route::current()->getName() == 'homeIngles')

											<a href="#redes">
												SOCIAL NETWORKS
											</a>

										@elseif(

											(Route::current()->getName() == 'terminosIngles') || 
											(Route::current()->getName() == 'politicasIngles') || 
											(Route::current()->getName() == 'mapaIngles') || 
											(Route::current()->getName() == 'trabajaIngles') ||
											(Route::current()->getName() == 'colorearIngles') 
											
										)
											@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

												<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/en#redes">
													SOCIAL NETWORKS
												</a>

											@else

												<a href="http://{{ $_SERVER['SERVER_NAME'] }}/en#redes">
													SOCIAL NETWORKS
												</a>

											@endif

										@endif

									</li>

									<li><!-- CONTACTO -->

										@if(Route::current()->getName() == 'homeIngles')

											<a href="#contacto">
												CONTACT US
											</a>

										@elseif(

											(Route::current()->getName() == 'terminosIngles') || 
											(Route::current()->getName() == 'politicasIngles') || 
											(Route::current()->getName() == 'mapaIngles') || 
											(Route::current()->getName() == 'trabajaIngles') ||
											(Route::current()->getName() == 'colorearIngles') 
											
										)
											@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

												<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/en#contacto">
													CONTACT US
												</a>

											@else

												<a href="http://{{ $_SERVER['SERVER_NAME'] }}/en#contacto">
													CONTACT US
												</a>

											@endif

										@endif

									</li>

									<li><!-- colorearIngles -->

										<a href="{{ route('colorearIngles') }}">
											COLOR
										</a>

									</li>

								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->