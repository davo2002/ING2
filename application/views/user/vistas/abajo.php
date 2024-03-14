		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-phone"></i> +57 3174832248</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i> hdsanchez@miuniclaretiana.edu.co</a></li>
								</ul>
							</div>
						</div>


						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="login">My Account</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->

		<script src="<?php echo base_url("assets/user/js/carrito.js")?>"></script>
		<script src="<?php echo base_url("assets/user/js/jquery.min.js")?>"></script>
		<script src="<?php echo base_url("assets/user/js/bootstrap.min.js")?>"></script>
		<script src="<?php echo base_url("assets/user/js/slick.min.js")?>"></script>
		<script src="<?php echo base_url("assets/user/js/nouislider.min.js")?>"></script>
		<script src="<?php echo base_url("assets/user/js/jquery.zoom.min.js")?>"></script>
		<script src="<?php echo base_url("assets/user/js/main.js")?>"></script>
		
		<script>
    // Función para cargar la vista rápida
    function cargarVistaRapida(boton) {
        var producto = boton.getAttribute('data-product');
        var categoria = boton.getAttribute('data-category');
        var precio = boton.getAttribute('data-price');
        var imagen = boton.getAttribute('data-image');
        var descripcion = boton.getAttribute('data-descripcion');

        var contenido = '<img src="' + imagen + '" alt="Imagen del Producto" style="max-width: 250px;">';
        contenido += '<p>Categoría: ' + categoria + '</p>';
        contenido += '<p>Producto: ' + producto + '</p>';
        contenido += '<a>Descripción: ' + descripcion + '</a>';

        $("#quickViewContent").html(contenido);
    }
</script>

	</body>
</html>
