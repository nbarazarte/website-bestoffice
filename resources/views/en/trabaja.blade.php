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
			<section class="page-header parallax parallax-3" style="background-image:url('../smarty/HTML/assets/images/demo/rubber-rings-2512269_1920.jpg')">
				<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<h1>Trabaja con Nosotros</h1>
					

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="{{ route('homeIngles')}}">Home</a></li>
						<li class="active">Trabaja con Nosotros</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->

			<section>
				<div class="container">		

					<div class="row">

						<!-- FORM -->
						<div class="col-md-8 col-sm-8">

							<h3>Nos gustría trabajar contigo, envíanos tus datos y adjunta tu hoja de vida</h3>

				
                    			@if(Session::has('message'))
					            
									<div id="mensaje-enviado" class="alert alert-success" role="alert">
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									  <span aria-hidden="true">&times;</span></button>
									  <strong><i class="fa fa-check"></i></strong> {{Session::get('message')}}
									</div>

								@endif  							

							{!! Form::open(['route' => 'enviarTrabaja', 'method'=>'PUT', 'id' => 'demo-form', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!} 

								<fieldset>
									<input type="hidden" name="action" value="contact_send" />

									<div class="row">
										<div class="form-group">
											<div class="col-md-4">
												<label for="name">Nombre y Apellido *</label>
												<input required type="text" value="" class="form-control" name="name" id="name">
											</div>
											<div class="col-md-4">
												<label for="email">Correo Electrónico *</label>
												<input required type="email" value="" class="form-control" name="email" id="email">
											</div>
											<div class="col-md-4">
												<label for="phone">Teléfono</label>
												<input required type="text" class="form-control masked" data-format="(9999) 999-99-99" data-placeholder="X" placeholder="" name="phone" id="phone">

												
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">

											<div class="col-md-4">

											</div>
											<div class="col-md-4">

											</div>											
											<div class="col-md-4">
										
											</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="message">Mensaje *</label>
												<textarea required maxlength="10000" rows="8" class="form-control" name="message" id="message"></textarea>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<input class="custom-file-upload" type="file" id="file" name="archivo" id="contact:attachment" data-btn-text="Buscar CV" />
												<small class="text-muted block">Tamaño máximo: 1Mb (zip/pdf/jpg/png)</small>
											</div>
										</div>

									</div>

								</fieldset>

								<div class="row">
									<div class="col-md-12">
										{!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
									</div>
								</div>
							{!! Form::close() !!}

						</div>
						<!-- /FORM -->

						<!-- INFO -->
						<div class="col-md-4 col-sm-4">

							<h4><strong style="color: #87bb4d">Queremos conocerte, ven y visítanos.</strong></h4>

							<!-- 
							Available heights
								height-100
								height-150
								height-200
								height-250
								height-300
								height-350
								height-400
								height-450
								height-500
								height-550
								height-600
							-->
							<div id="map2" class="height-200 grayscale"></div>

							<hr />

							<p>
								<span class="block"><strong><i class="fa fa-map-marker"></i> Dirección:</strong> Calle Zona Rental, Edif. Andrés Germán Otero, Piso PB, Ofic. 1. Urb. Terrazas del Ávila. Caracas-Venezuela.</span>
								<span class="block"><strong><i class="fa fa-phone"></i> Teléfono:</strong> <a href="tel:+58-212-204-24-31">+58 (212) 204.22.54 </a></span>
								<span class="block"><strong><i class="fa fa-phone"></i> Teléfono:</strong> <a href="tel:+58-212-204-24-31">+58 (212) 204.24.31 </a></span>
								<span class="block"><strong><i class="fa fa-phone"></i> Teléfono:</strong> <a href="tel:+58-212-204-24-31">+58 (212) 204.20.29 </a></span>
								<span class="block"><strong><i class="fa fa-envelope"></i> Correo Electrónico:</strong> <a href="mailto:reclutamiento@monitorbg.com">reclutamiento@monitorbg.com</a></span>
							</p>

						</div>
						<!-- /INFO -->

					</div>

				</div>
			</section>
			<!-- / -->

<script type="text/javascript">
function showfield(name){
  if(name=='otros')
  	document.getElementById('div1').innerHTML='<label for="otroCargo">Indique</label><input type="text" class="form-control pointer" name="otroCargo" />';

  else document.getElementById('div1').innerHTML='';
}

function showfield2(name){
  if(name=='otros')
  	document.getElementById('div2').innerHTML='<label for="otroSector">Indique</label><input type="text" class="form-control pointer" name="otroSector" />';

  else document.getElementById('div2').innerHTML='';
}
</script>
@endsection					