@extends('app')

@section('content')

@include('menuTop')

			<!-- SLIDER -->
			<section id="slider" class="fullheight" style="background-image:url('smarty/HTML/assets/images/demo/children-593313_1920.jpg')">
				<div class="overlay dark-3"><!-- dark overlay [0 to 9 opacity] --></div>

				<div class="display-table">
					<div class="display-table-cell vertical-align-middle">
						<div class="container">

							<div class="slider-featured-text text-center">
								<h1 class="text-white wow fadeInUp" data-wow-delay="0.4s">
									
									<!--
										TEXT ROTATOR
										data-animation="fade|flip|flipCube|flipUp|spin"
									-->
									<span class="rotate" data-animation="flipCube" data-speed="3500">
										Aquí se viene a, ¡colorear y diviertirse!
									</span>
								</h1>
								<h2 class="weight-300 text-white wow fadeInUp" data-wow-delay="0.8s">
										¡Divierte descargando y coloreando! 
									<br>
										¡Libera tu imaginación aquí en Best Office!
								</h2>

							</div>
				
						</div>
					</div>
				</div>

			</section>
			<!-- /SLIDER -->

			<!-- INTRO -->
			<section id="intro">
						
				<div class="container text-center">
					
					<h1 class="nomargin size-50 weight-300 wow fadeInUp" data-wow-delay="0.4s">Colorea con Best Office</h1>
					<p class="lead font-lato size-30 wow fadeInUp" data-wow-delay="0.7s">Siempre un poco de color es bueno.</p>
					
					<div class="text-center">
						<p class="lead">						
							Presentamos a los más pequeños del hogar esta sección llena de libertad, un espacio para colorear como deseen a esos personajes que a nosotros tambien nos acompañaron en nuestra infancia.<br>
							Los consentidos de la casa se divertirán llenado de vida sus dibujos y tú tranquilo porque cuentas con Best Office.<br>
							Así que busquen sus colores, impriman su dibujo favorito y denle rienda suelta a su creatividad, ¡queremos verte feliz!
						</p>

					</div>
				</div>
			</section>

			<section id="colorear">
				<div class="container">

					<!-- 
						controlls-over		= navigation buttons over the image 
						buttons-autohide 	= navigation buttons visible on mouse hover only

						owl-carousel item paddings
							.owl-padding-0
							.owl-padding-1
							.owl-padding-2
							.owl-padding-3
							.owl-padding-6
							.owl-padding-10
							.owl-padding-15
							.owl-padding-20
					-->
					<div class="text-center">
						<div class="owl-carousel owl-padding-1 nomargin buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items": "1", "autoPlay": 8500, "navigation": true, "pagination": false}'>

							@foreach ($files as $file)

								@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )


									<!-- item -->
									<div class="item-box">
										<figure>
											<span class="item-hover">
												<span class="overlay dark-5"></span>
												<span class="inner">

													<!-- details -->
													<a class="ico-rounded" href="{{ route('descargarImagen',substr($file,63)) }}">
														
														<span class="glyphicon glyphicon-cloud-download size-20"></span>
													</a>

												</span>
											</span>

												<img class="img-responsive " src="{{ substr($file,54) }}" alt="">
											
										</figure>
									</div>
									<!-- /item -->


								@else


									<!-- item -->
									<div class="item-box">
										<figure>
											<span class="item-hover">
												<span class="overlay dark-5"></span>
												<span class="inner">

													<!-- details -->
													<a class="ico-rounded" href="{{ route('descargarImagen',substr($file,57)) }}">
														
														<span class="glyphicon glyphicon-cloud-download size-20"></span>
													</a>

												</span>
											</span>

												<img class="img-responsive " src="{{ substr($file,48) }}" alt="">
											
										</figure>
									</div>
									<!-- /item -->

								@endif



























							@endforeach

						</div>
					</div>

				</div>
			</section>

@endsection					