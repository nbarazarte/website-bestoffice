@extends('app')

@section('content')

@include('menuTop')

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
			<section class="page-header parallax parallax-3" style="background-image:url('smarty/HTML/assets/images/demo/paper-571938_1920.jpg')">
				<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<h1>Términos del Servicio</h1>
					

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="{{ route('home')}}">Inicio</a></li>
						<li class="active">Términos del Servicio</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->


			<section>
				<div class="container">		

					<div class="row">
						<div class="col-md-6">

							<h4>Términos y Condiciones de Uso del Sitio Web solucionesbestoffice.com</h4>

							<p class="justify">
								Bienvenido a ilernus.com, la plataforma de <b>B&G TECHNOLOGIES, S.A.</b>, para la formación en Línea. El servicio incluye (sin limitaciones) todos los sitios web, y otras funcionalidades interactivas, de propiedad, operada y distribuida por <b>B&G TECHNOLOGIES, S.A.</b>
								Al acceder a cualquier parte del Servicio, usted está aceptando los términos y condiciones que se describen a continuación, nuestra política de privacidad y cualquier otro aviso legal publicado en  el sitio web ilernus.com. Si usted no está de acuerdo con cualquiera de estos términos, no debe utilizar el servicio. Estas condiciones se aplican a todos los usuarios que ingresan al sitio web Ilernus.com, incluidos aquellos que simplemente están viendo el contenido disponible en la página web (usuarios no registrados), así como los usuarios registrados.
								Nosotros  podemos, a nuestra discreción, modificar las presentes condiciones del servicio. Al acceder al servicio en cualquier momento después de las modificaciones, usted acepta los cambios realizados.
							</p>

							<h4>Descripción del Servicio</h4>

							<p class="justify">
								<b><b>B&G TECHNOLOGIES, S.A.</b> (ILERNUS)</b> es una empresa dedicada al desarrollo de software, tecnología y soluciones de inteligencia de negocios.

								Como parte de su proceso de expansión de negocio ha  desarrollado una aplicación de formación en línea, a través de una plataforma multiempresa multiusuario.

								<b><b>B&G TECHNOLOGIES, S.A.</b> (ILERNUS)</b>,  mediante una combinación de conocimientos, tecnología y control de gestión ofrece transformar la manera de planificar, desarrollar y gestionar el proceso de formación dentro de las empresas.
								Mediante un proceso automatizado de formación intuitiva y de sencillo seguimiento pone a disposición de sus clientes una biblioteca de cursos variada y actualizada para cada industria, reduciendo  costos y optimizando el tiempo de cada colaborador de la empresa en el proceso de formación, de una manera sencilla.

								Los clientes podrán gestionar los planes de formación para cada uno de sus colaboradores, ajustándolo al área de interés, así como al nivel de  conocimientos y a la vez participa en el control del proceso a través de los indicadores destinados a tal fin.

								De igual forma funciona como un proveedor de servicios de su plataforma, a fin de poner a su alcance innovadoras soluciones de tecnología para brindarle toda la infraestructura necesaria que contribuya a soportar el crecimiento y desarrollo de su empresa. 
								<b><b>B&G TECHNOLOGIES, S.A.</b> (ILERNUS)</b> cuenta con un equipo de profesionales para poner al alcance de su organización  soluciones efectivas en cada uno de los componentes requeridos para el desarrollo de su estrategia de negocios, tanto para colocación de aplicaciones habilitadas por Internet, así como para soporte a aplicaciones de negocios que requieren servicios de su plataforma.

								Entre los elementos diferenciadores que posee ilernus, para proveer  y utilizar sus servicios, podemos mencionar los siguientes:

								<ul>
									
									<li>Equipo de profesionales especializados en cada una de las áreas de conocimiento</li>
									<li>Plataforma alojada  en Data Center Internacional.</li>
									<li>Alianzas estratégicas con proveedores de tecnología para garantizar importantes ventajas en el uso de tecnologías de punta.</li>
									<li>Control de usuarios.</li>
									<li>Conectividad.</li>
									<li>Gestión automatizada de la selección, asignación y seguimiento de planes de formación por colaborador.</li>
									<li>Creación de pensum de formación por tipo de cargo.</li>
									<li>Comercialización de créditos y opción de proyectos a la medida.</li>
									<li>Intercambio de conocimientos en espacios virtuales.</li>
									<li>Autogestión de organigrama de formación.</li>	

								</ul>

							</p>

							<h4>Términos del Servicio</h4>
							<p class="justify">
								Los siguientes términos se aplican al uso del servicio:
								<ol>
									<li>Toda la información personal que usted proporcione al momento de la solicitud del servicio y, posteriormente, debe ser verdadera y precisa.</li>
									<li>Usted es responsable por mantener la seguridad de su usuario y contraseña. Ilernus  no será responsable por cualquier pérdida o daño causado por el incumplimiento de esta medida de seguridad.</li>
									<li>Usted se compromete a no cargar al servicio ningún archivo con derecho de autor, marca registrada o materiales de propiedad sin la autorización expresa del titular.</li>
									<li>Usted se compromete a utilizar el servicio únicamente para fines lícitos y a no emplearlo de forma que infrinja el uso o los derechos de <b><b>B&G TECHNOLOGIES, S.A.</b> (ILERNUS)</b> o de cualquier otro usuario.</li>
								</ol>

							</p>

							<h4>Derechos de autor  y  Derechos de propiedad industrial </h4>

							<p class="justify">
								Toda la información contenida disponible a través de este sitio web están protegidos por la Ley Sobre el  Derecho de Autor y los Derechos de Propiedad Industrial  en Venezuela. El propietario de los derechos de autor y marca registrada es <b>B&G TECHNOLOGIES, S.A.</b>, sus afiliados y/o terceros otorgantes de licencias. 
							</p>

						</div>

						<div class="col-md-6">

							<p class="justify">							
								A excepción de lo expresamente permitido por la ley aplicable o como se describe en estos Términos y Condiciones, la licencia correspondiente o el acuerdo suscrito, usted no podrá copiar, mostrar, distribuir, modificar, publicar, reproducir, almacenar, transmitir, crear trabajos derivados, vender o licenciar todo o parte de los contenidos, productos o servicios obtenidos de este sitio en cualquier medio a cualquier persona. Usted puede imprimir y descargar porciones de material de las diferentes áreas del servicio exclusivamente para su uso propio y no para uso comercial, siempre que usted se comprometa a no modificar o eliminar los derechos de autor o de propiedad de los materiales.
								Los  contenidos descargables del sitio se pueden imprimir o guardar para su uso personal, no comercial, siempre y cuando los derechos de autor y otros avisos de propiedad se mantengan intactos. Sin la previa autorización por escrito de <b>B&G TECHNOLOGIES, S.A.</b>, está prohibido obtener los contenidos del sitio para crear, directa o indirectamente, una colección, compilación, base de datos o directorio a través de robots o minería de datos, recopilación de datos o herramientas similares de extracción o procesos manuales. Usted no puede utilizar técnicas de enmarcado para adjuntar cualquier marca, logo u otra información de propiedad (incluyendo imágenes, texto, diseño de página, o forma) de <b>B&G TECHNOLOGIES, S.A.</b>, o sus afiliados sin consentimiento escrito. Usted no puede usar etiquetas internas o cualquier otro "texto oculto" utilizando el nombre <b>B&G TECHNOLOGIES, S.A.</b> o ilernus, marcas comerciales sin el consentimiento por escrito de <b>B&G TECHNOLOGIES, S.A.</b>	
							</p>

							<h4>Conducta de uso del servicio</h4>
							<p class="justify">

								El uso del servicio está sujeto a todas las leyes y regulaciones aplicables. Usted es el único responsable por el contenido de sus comunicaciones en el servicio. Usted se compromete a no cargar, compartir, publicar, distribuir o facilitar la distribución de cualquier archivo -incluyendo texto, comunicaciones, software, imágenes, sonidos, datos u otra información- que:

								<ol>
									<li>Sea ilegal, amenazante, abusivo, acosador, difamatorio, injurioso, engañoso, fraudulento, que invada la privacidad de otro, tortuoso, que contenga descripciones o cuentas explícitas o gráficas de actos sexuales (incluyendo pero no limitado a lenguaje sexual de naturaleza violenta o amenazadora dirigida a otro individuo o grupo de individuos), o de otro modo que viole nuestras reglas o políticas;</li>
									<li>Victimice, acose, degrade o intimide a una persona o grupo de personas sobre la base de su religión, género, orientación sexual, raza, etnia, edad o discapacidad;</li>
									<li>Infrinja cualquier patente, marca comercial, secreto comercial, derecho de autor, derecho de publicidad u otra propiedad intelectual o derecho de propiedad de cualquier parte;</li>
									<li>Constituya publicidad no autorizada o no solicitada, o correo masivo no deseado (también conocido como "spam"), cartas en cadena, cualquier otra forma de solicitación no autorizada o cualquier forma de lotería o juegos de azar;</li>
									<li>ontenga virus informáticos o cualquier otro código informático, archivos o programas diseñados o destinados a interrumpir, dañar o limitar el funcionamiento de cualquier software, hardware o equipo de telecomunicaciones, o a dañar u obtener acceso no autorizado a cualquier dato u otra información de terceros;</li>
								</ol>

								Usted no puede utilizar su usuario para violar la seguridad de otra cuenta o intentar obtener acceso no autorizado a otra red o servidor. No todas las partes del servicio pueden estar disponibles para usted u otros usuarios autorizados del mismo. Usted no deberá interferir con el uso y el disfrute de cualquier otra persona del servicio. Los usuarios que violan sistemas de seguridad de la red pueden incurrir en responsabilidad penal o civil.
								Usted acepta que es posible que en cualquier momento y a nuestra entera discreción, se cancele su participación, cuenta u otra afiliación con el servicio sin previo aviso por violar cualquiera de las disposiciones anteriores. Además, usted reconoce que vamos a cooperar plenamente con las investigaciones relacionadas a la violación de los sistemas de seguridad de la red en otros sitios, y que colaboraremos con las autoridades policiales en la investigación de presuntos casos de violación penal.
								<b>B&G TECHNOLOGIES, S.A.</b> se reserva el derecho, pero no tiene la obligación, de eliminar de la plataforma cualquier curso en cualquier momento y por cualquier motivo.
								El usuario de esta página web y <b><b>B&G TECHNOLOGIES, S.A.</b> (ILERNUS)</b>  aceptan que cualquier controversia o reclamación derivada o referente al uso de esta página web se resolverá según las leyes de Venezuela, y se elige como domicilio especial, único y exclusivo a la ciudad de Caracas, a la Jurisdicción de  cuyos Tribunales declaran expresamente las partes a someterse.

								<br><br>

								Vigente a partir del 21 de Junio de 2016.
								<br>

								He leído y acepto las condiciones 
								<br>
								Para cualquier notificación favor dirigirse a :
								<ul>
									<li>
										Correo electrónico: ilernus@ilernus.com
									</li>
									<li>
										Teléfonos: 0800-iLernus
									</li>
								</ul>
							</p>

						</div>
					</div>

				</div>
			</section>
			<!-- / -->

@endsection					