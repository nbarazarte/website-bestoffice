			<!-- PARALLAX -->
			<section id="productos" class="parallax " style="background-image: url('smarty/HTML/assets/images/demo/paper-184920_1920_comprimida.jpg');">
				<div class="overlay dark-1"><!-- dark overlay [0 to 9 opacity] --></div>

				<div class="container">

					<div class="owl-carousel text-center owl-testimonial nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": true}'>
							
						<div class="text-center">
							<h3 class="nomargin">Our Products</h3>
							<p class="font-lato weight-300 lead nomargin-top">Nuevas y mejores alternativas.</p>
						</div>

					</div>

				</div>

			</section>
			<!-- /PARALLAX -->



						@foreach ($productos as $prod)

							<div id="{{ $prod->nombre }}" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">

										<!-- header modal -->
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myLargeModalLabel">{{ $prod->marca }}</h4>
										</div>

										<!-- body modal -->
										<div class="modal-body">
											
											
											<table border="0" width="*">
												<tr>
													<td style="width: 40%">
														<img class="img-responsive" src="data:image/jpeg;base64,{{ $prod->imagen }}" alt="" title="">
													</td>

													<td>
															<table border="0" width="*">
																<tr>
																	<td>
																		{!! html_entity_decode($prod->descripcion) !!}
																	</td>
																</tr>
															</table>



														
													</td>

												</tr>
											</table>



											

										</div>

									</div>
								</div>
							</div>

						@endforeach






			<!-- PRODUCTOS -->
			<section >
				<div class="container">

					<h2 class="owl-featured noborder"><strong>Los más destacados</strong> </h2>
					<div class="owl-carousel featured nomargin owl-padding-10" data-plugin-options='{"singleItem": false, "items": "5", "stopOnHover":false, "autoPlay":4000, "autoHeight": false, "navigation": true, "pagination": false}'>


						@foreach ($productos as $prod)


							<!-- item -->
							<div class="shop-item nomargin">

								<div class="thumbnail">
									<!-- product image(s) -->
										<img class="img-responsive" src="data:image/jpeg;base64,{{ $prod->imagen }}" alt="" title="">
									<!-- /product image(s) -->
								</div>
								
								<div class="shop-item-summary text-center">
									<h2>{{ str_replace("-"," ",$prod->nombre) }}</h2>
									
									<!-- rating -->
									<div class="shop-item-rating-line">
										<div class="rating rating-5 size-13"><!-- rating-0 ... rating-5 --></div>
									</div>
									<!-- /rating -->

								</div>

									<!-- buttons -->
									<div class="shop-item-buttons text-center">

										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{ $prod->nombre }}">
											<i class="fa fa-search-plus" aria-hidden="true"></i> Ver
										</button>

									</div>
									<!-- /buttons -->
							</div>
							<!-- /item -->

						@endforeach




					</div>

				</div>
			</section>
			<!-- /PRODUCTOS -->