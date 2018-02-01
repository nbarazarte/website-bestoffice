@if(Route::current()->getName() == 'homeIngles')

	<a class="dropdown-toggle" href="#marcas">
		BRANDS
	</a>

@elseif(

	(Route::current()->getName() == 'terminosIngles') || 
	(Route::current()->getName() == 'politicasIngles') || 
	(Route::current()->getName() == 'mapaIngles') || 
	(Route::current()->getName() == 'trabajaIngles') ||
	(Route::current()->getName() == 'colorearIngles') 
	
)
	@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

		<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/en#marcas">
			BRANDS
		</a>

	@else

		<a href="http://{{ $_SERVER['SERVER_NAME'] }}/en#marcas">
			BRANDS
		</a>

	@endif

@endif

<ul class="dropdown-menu">
	
	<li>
		
		@if(Route::current()->getName() == 'homeIngles')

			<a href="#chamex">CHAMEX</a>

		@elseif(

			(Route::current()->getName() == 'terminosIngles') || 
			(Route::current()->getName() == 'politicasIngles') || 
			(Route::current()->getName() == 'mapaIngles') || 
			(Route::current()->getName() == 'trabajaIngles') ||
			(Route::current()->getName() == 'colorearIngles') 
			
		)
			@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/en#chamex">
					CHAMEX
				</a>

			@else

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}/en#chamex">
					CHAMEX
				</a>

			@endif

		@endif

	</li>
	
	<li>

		@if(Route::current()->getName() == 'homeIngles')

			<a href="#report">SUZANO REPORT PREMIUM</a>

		@elseif(

			(Route::current()->getName() == 'terminosIngles') || 
			(Route::current()->getName() == 'politicasIngles') || 
			(Route::current()->getName() == 'mapaIngles') || 
			(Route::current()->getName() == 'trabajaIngles') ||
			(Route::current()->getName() == 'colorearIngles') 
			
		)
			@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/en#report">
					SUZANO REPORT PREMIUM
				</a>

			@else

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}/en#report">
					SUZANO REPORT PREMIUM
				</a>

			@endif

		@endif

	</li>
		
	<li>

		@if(Route::current()->getName() == 'homeIngles')

			<a href="#reprograf">REPROGRAF</a>

		@elseif(

			(Route::current()->getName() == 'terminosIngles') || 
			(Route::current()->getName() == 'politicasIngles') || 
			(Route::current()->getName() == 'mapaIngles') || 
			(Route::current()->getName() == 'trabajaIngles') ||
			(Route::current()->getName() == 'colorearIngles') 
			
		)
			@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/en#reprograf">
					REPROGRAF
				</a>

			@else

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}/en#reprograf">
					REPROGRAF
				</a>

			@endif

		@endif

	</li>

	<li>
		
		@if(Route::current()->getName() == 'homeIngles')

			<a href="#hammermill">HAMMERMILL</a>

		@elseif(

			(Route::current()->getName() == 'terminosIngles') || 
			(Route::current()->getName() == 'politicasIngles') || 
			(Route::current()->getName() == 'mapaIngles') || 
			(Route::current()->getName() == 'trabajaIngles') ||
			(Route::current()->getName() == 'colorearIngles') 
			
		)
			@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/en#hammermill">
					HAMMERMILL
				</a>

			@else

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}/en#hammermill">
					HAMMERMILL
				</a>

			@endif

		@endif

	</li>	
	
	<li>		

		@if(Route::current()->getName() == 'homeIngles')

			<a href="#premium">PREMIUM LASER TONER</a>

		@elseif(

			(Route::current()->getName() == 'terminosIngles') || 
			(Route::current()->getName() == 'politicasIngles') || 
			(Route::current()->getName() == 'mapaIngles') || 
			(Route::current()->getName() == 'trabajaIngles') ||
			(Route::current()->getName() == 'colorearIngles') 
			
		)
			@if( $_SERVER['SERVER_NAME'] == '127.0.0.1' )

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/en#premium">
					PREMIUM LASER TONER
				</a>

			@else

				<a href="http://{{ $_SERVER['SERVER_NAME'] }}/en#premium">
					PREMIUM LASER TONER
				</a>

			@endif

		@endif		
	</li>

</ul>