

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							
						</div>
					</div>
					<!-- /section title -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<?php if (!empty($productosRepetidos)): ?>
											<?php foreach ($productosRepetidos as $data): ?>
												<div class="product">
													<div class="product-img">
														<?php
														$imagen_path = base_url('assets/archivos/' . $data->imagen);
														echo '<img src="' . $imagen_path . '" alt="Imagen del producto" style="max-width: 2000px;">';
														?>
														<div class="product-label">
															<span class="sale">%</span>
															<span class="sale"><?php echo $data->cantidad; ?></span>
														</div>
													</div>
													<div class="product-body">
														<p class="product-category">Categoría <?php echo $data->categoria; ?></p>
														<h3 class="product-name"><?php echo $data->producto; ?></h3>
														<h4 class="product-price">
															<?php
															$precio = $data->precio;
															$valor_formateado = number_format($precio, 0, ".", ".");
															echo "$" . $valor_formateado;
															?>
														</h4>
														<div class="product-rating"></div>
														<div class="product-btns">
															<button class="quick-view" data-toggle="modal" data-target="#quickViewModal"
																	data-product="<?php echo $data->producto; ?>"
																	data-category="<?php echo $data->categoria; ?>"
																	data-price="<?php echo $data->precio; ?>"
																	data-image="<?php echo $imagen_path; ?>"
																	data-descripcion="<?php echo $data->descripcion; ?>"
																	onclick="cargarVistaRapida(this)">
																<i class="fa fa-eye"></i><span class="tooltipp">Vista Rápida</span>
															</button>
														</div>
													</div>
													<div class="add-to-cart">
														<button class="add-to-cart-btn"
																data-product="<?php echo $data->producto; ?>"
																data-price="<?php echo $data->precio; ?>"
																onclick="agregarAlCarrito(this)">Agregar al Carrito
														</button>
													</div>
												</div>
											<?php endforeach; ?>
										<?php endif; ?>

										<?php if (!empty($productosNoRepetidos)): ?>
											<?php foreach ($productosNoRepetidos as $data): ?>
												<div class="product">
													<div class="product-img">
														<?php
														$imagen_path = base_url('assets/archivos/' . $data->imagen);
														echo '<img src="' . $imagen_path . '" alt="Imagen del producto" style="max-width: 2000px;">';
														?>
														<div class="product-label">
															<span class="sale">%</span>
															<span class="sale"><?php echo $data->cantidad; ?></span>
														</div>
													</div>
													<div class="product-body">
														<p class="product-category">Categoría <?php echo $data->categoria; ?></p>
														<h3 class="product-name"><?php echo $data->producto; ?></h3>
														<h4 class="product-price">
															<?php
															$precio = $data->precio;
															$valor_formateado = number_format($precio, 0, ".", ".");
															echo "$" . $valor_formateado;
															?>
														</h4>
														<div class="product-rating"></div>
														<div class="product-btns">
																	<button class="quick-view" data-toggle="modal" data-target="#quickViewModal"
																			data-product="<?php echo $data->producto; ?>"
																			data-category="<?php echo $data->categoria; ?>"
																			data-price="<?php echo $data->precio; ?>"
																			data-image="<?php echo $imagen_path; ?>"
																			data-descripcion="<?php echo $data->descripcion; ?>"
																			onclick="cargarVistaRapida(this)">
																		<i class="fa fa-eye"></i><span class="tooltipp">Vista Rápida</span>
																	</button>

														</div>
													</div>
													<div class="add-to-cart">
														<button class="add-to-cart-btn"
																data-product="<?php echo $data->producto; ?>"
																data-price="<?php echo $data->precio; ?>"
																onclick="agregarAlCarrito(this)">Agregar al Carrito
														</button>
													</div>
												</div>
											<?php endforeach; ?>
										<?php endif; ?>
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>

					<!-- Modal para Vista Rápida -->
					<div class="modal fade" id="quickViewModal" tabindex="-1" role="dialog" aria-labelledby="quickViewModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="quickViewModalLabel">Detalles del Producto</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body" id="quickViewContent">
									<!-- Los detalles del producto se cargarán aquí dinámicamente -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		