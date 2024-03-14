  <!-- SECTION -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-7">
          <!-- Billing Details -->
          <div class="billing-details">
            <div class="section-title">
            </div>

            <form action="<?php echo base_url().'pedido'?>" method="post"> <!-- Reemplaza 'procesar_pedido.php' con la ruta del controlador de procesamiento de pedidos en CodeIgniter -->

            
            <div class="col-md-7 order-details">
                <div class="section-title text-center">
                  <h3 class="title">Tus Productos</h3>
                </div>
                
								<div class="qty" id="total-items">0</div>Item(s) selected
                <div class="order-summary">
                      <!-- Mostrar productos en el carrito -->
                  <div class="order-col">
                    <div><strong>Producto</strong></div>
                    <div><strong>Cantidad</strong></div>
                    <div><strong>TOTAL</strong></div>
                  </div>
                  <div class="product-body" id="cart-list-section">
                    <!-- La lista de productos del carrito se generará aquí mediante JavaScript -->
                  </div>
                  <div class="order-col">
                    <div>Shipping</div>
                    <div><strong>FREE</strong></div>
                  </div>
                  <div class="cart-dropdown" id="carrito-externo">
                    
										</div>
										<div class="cart-summary">
											<small style="color: white;"><span id="total-items-summary" class="qty">0</span> Item(s) selected</small>
											<h5 style="color: Red;">SUBTOTAL: $<span id="total-value">0</span></h5>
										</div>
										<div class="cart-btns">
											<a onclick="vaciarCarrito()" style="color: white;">Vaciar carrito <i class="fa fa-arrow-circle-right"></i></a>
											<a href="checkout" style="color: white;">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div><div class="order-notes">
                      <label for="inputOrderNotes">Notas del Pedido:</label>
                      <textarea class="form-control" id="inputOrderNotes" name="note" placeholder="Agrega notas adicionales al pedido"></textarea>
                  </div>
                <!-- Botón de realizar pedido -->
                <CENTER><button class="primary-btn order-submit" type="submit" onclick="realizarPago()">Place order</button>
                </div>
              </div>
            </div>   
            <h3 class="title">Datos Personales</h3>
            <br> 
            <!-- Codigo de Compra -->
            <div class="col-lg-5">
              <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <label for="inputCodigoCompra">Código de Compra:</label>
                  <input class="form-control" id="inputCodigoCompra" type="number" name="codigo" value="<?php echo rand(100000, 999999) ?>" readonly />
              </div>
          </div>

                <br><br><br>
                <!-- Datos Personales -->
                <div class="user-info">
                    <p><strong>Nombre:</strong> <?php echo $this->session->usuario->nombre; ?> <?php echo $this->session->usuario->snombre; ?> <?php echo $this->session->usuario->apellido; ?> <?php echo $this->session->usuario->sapellido; ?></p>
                    <input type="hidden" name="nombre" value="<?php echo $this->session->usuario->nombre; ?>">
                    <input type="hidden" name="snombre" value="<?php echo $this->session->usuario->snombre; ?>">
                    <input type="hidden" name="apellido" value="<?php echo $this->session->usuario->apellido; ?>">
                    <input type="hidden" name="sapellido" value="<?php echo $this->session->usuario->sapellido; ?>">
                    
                    <p><strong>Número de Cédula:</strong> <?php echo $this->session->usuario->cedula; ?></p>
                    <input type="hidden" name="cedula" value="<?php echo $this->session->usuario->cedula; ?>">
                    
                    <p><strong>Direccion:</strong> <?php echo $this->session->usuario->direccion; ?></p>
                    <input type="hidden" name="direccion" value="<?php echo $this->session->usuario->direccion; ?>">
                    
                    <p><strong>País:</strong> <?php echo $this->session->usuario->pais; ?></p>
                    <input type="hidden" name="pais" value="<?php echo $this->session->usuario->pais; ?>">
                    
                    <p><strong>Ciudad:</strong> <?php echo $this->session->usuario->ciudad; ?></p>
                    <input type="hidden" name="ciudad" value="<?php echo $this->session->usuario->ciudad; ?>">
                    <p><strong>Telefono:</strong> <?php echo $this->session->usuario->telefono; ?></p>
                    <input type="hidden" name="telefono" value="<?php echo $this->session->usuario->telefono; ?>">
                    <p><strong>Codigo Postal:</strong> <?php echo $this->session->usuario->codigo_postal; ?></p>
                    <input type="hidden" name="codigo_postal" value="<?php echo $this->session->usuario->codigo_postal; ?>">
                    <p><strong>Correo:</strong> <?php echo $this->session->usuario->correo; ?></p>
                    <input type="hidden" name="correo" value="<?php echo $this->session->usuario->correo; ?>">
                    <!-- Order Notes -->
                  
                    <!-- Otros campos de datos personales -->
                </div>
            

                
            </form>
        </div>

        <!-- /Order Details -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /SECTION -->

