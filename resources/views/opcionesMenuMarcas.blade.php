@if(Route::current()->getName() == 'home')

	<a class="dropdown-toggle" href="#marcas">
		MARCAS
	</a>

@elseif(

	(Route::current()->getName() == 'terminos') || 
	(Route::current()->getName() == 'politicas') || 
	(Route::current()->getName() == 'mapa') || 
	(Route::current()->getName() == 'trabaja') ||
	(Route::current()->getName() == 'colorear') 
	
)
	@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

		<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#marcas">
			MARCAS
		</a>

	@else

		<a href="http://{{ $_SERVER['SERVER_NAME'] }}#marcas">
			MARCAS
		</a>

	@endif

@endif

<ul class="dropdown-menu">
	
	<li>
		
		@if(Route::current()->getName() == 'home')

			<a href="#chamex">CHAMEX</a>

		@elseif(

			(Route::current()->getName() == 'terminos') || 
			(Route::current()->getName() == 'politicas') || 
			(Route::current()->getName() == 'mapa') || 
			(Route::current()->getName() == 'trabaja') ||
			(Route::current()->getName() == 'colorear') 
			
		)
			@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#chamex">
					CHAMEX
				</a>

			@else

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}#chamex">
					CHAMEX
				</a>

			@endif

		@endif

	</li>
	
	<li>

		@if(Route::current()->getName() == 'home')

			<a href="#report">SUZANO REPORT PREMIUM</a>

		@elseif(

			(Route::current()->getName() == 'terminos') || 
			(Route::current()->getName() == 'politicas') || 
			(Route::current()->getName() == 'mapa') || 
			(Route::current()->getName() == 'trabaja') ||
			(Route::current()->getName() == 'colorear') 
			
		)
			@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#report">
					SUZANO REPORT PREMIUM
				</a>

			@else

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}#report">
					SUZANO REPORT PREMIUM
				</a>

			@endif

		@endif

	</li>
		
	<li>

		@if(Route::current()->getName() == 'home')

			<a href="#reprograf">REPROGRAF</a>

		@elseif(

			(Route::current()->getName() == 'terminos') || 
			(Route::current()->getName() == 'politicas') || 
			(Route::current()->getName() == 'mapa') || 
			(Route::current()->getName() == 'trabaja') ||
			(Route::current()->getName() == 'colorear') 
			
		)
			@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#reprograf">
					REPROGRAF
				</a>

			@else

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}#reprograf">
					REPROGRAF
				</a>

			@endif

		@endif

	</li>

	<li>
		
		@if(Route::current()->getName() == 'home')

			<a href="#hammermill">HAMMERMILL</a>

		@elseif(

			(Route::current()->getName() == 'terminos') || 
			(Route::current()->getName() == 'politicas') || 
			(Route::current()->getName() == 'mapa') || 
			(Route::current()->getName() == 'trabaja') ||
			(Route::current()->getName() == 'colorear') 
			
		)
			@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#hammermill">
					HAMMERMILL
				</a>

			@else

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}#hammermill">
					HAMMERMILL
				</a>

			@endif

		@endif

	</li>	

	<li>
		
		@if(Route::current()->getName() == 'home')

			<a href="#hpOffice">HP OFFICE</a>

		@elseif(

			(Route::current()->getName() == 'terminos') || 
			(Route::current()->getName() == 'politicas') || 
			(Route::current()->getName() == 'mapa') || 
			(Route::current()->getName() == 'trabaja') ||
			(Route::current()->getName() == 'colorear') 
			
		)
			@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#hpOffice">
					HP OFFICE
				</a>

			@else

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}#hpOffice">
					HP OFFICE
				</a>

			@endif

		@endif

	</li>		
	
<!--

	<li>		

		@if(Route::current()->getName() == 'home')

			<a href="#premium">PREMIUM LASER TONER</a>

		@elseif(

			(Route::current()->getName() == 'terminos') || 
			(Route::current()->getName() == 'politicas') || 
			(Route::current()->getName() == 'mapa') || 
			(Route::current()->getName() == 'trabaja') ||
			(Route::current()->getName() == 'colorear') 
			
		)
			@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#premium">
					PREMIUM LASER TONER
				</a>

			@else

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}#premium">
					PREMIUM LASER TONER
				</a>

			@endif

		@endif		
	</li>
-->
</ul>