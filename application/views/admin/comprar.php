<form class="user"action="<?php echo base_url().'aggproductos'?>" method="post"enctype="multipart/form-data">

<main>
    <br>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 offset-lg-1">
                <h3 class="text-offset-lg-1 font-weight-light my-10">Comprar Productos</h3>
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5" style="display: none;">
                        <select name="compra" id="Venta">
                            <option value="Venta">Venta</option>
                        </select>
                    </div>
                </div>
                Identificado: <?php echo $this->session->admins->cedula; ?><br>
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <a>Codigo de compra</a>
                        <input class="form-control" id="inputFirstName" REQUIRED type="number" name="codigo"
                            value="<?php echo rand(100000, 999999) ?>" readonly />
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <input class="form-control" id="inputFirstName" REQUIRED type="date" name="date"
                        value="<?php echo date('Y-m-d'); ?>" readonly />
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5" >CATEGORIA
                    <select name="categoria" id="Venta">
                        <option value="COMPUTADORES">COMPUTADORES</option>
                        <option value="PORTATILES">PORTATILES</option>
                        <option value="PROCESADORES">PROCESADORES</option>
                        <option value="PANTALLAS">PANTALLAS</option>
                        <option value="RAM">RAM</option>
                        <option value="GRAFICA">GRAFICA</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <input type="file" class="form-control form-control-user" REQUIRED name="imagen" placeholder="imagen">
                </div>
            </div>
             <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">  
                    <input class="form-control" id="inputFirstName" REQUIRED type="text" name="producto" placeholder="Nombre Del Producto" />
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">  
                    <input class="form-control" id="inputFirstName" REQUIRED type="text" name="descripcion" placeholder="Descripcion Nombre Del Producto" />
                </div>
            </div>
            <label>
                Cantidad de artículos:
                <input type="number" id="cantidad" name="cantidad" min="1" value="1" oninput="calcularTotal()">
            </label>
            <label>
                Precio por artículo:
                <input type="number" id="precio" name="precio" min="0.01" step="0.01" value="1.00" oninput="calcularTotal()">
            </label>
            <style>/* Clase para ocultar elementos */
.hidden-label {
    display: none;
}
</style>

            <label>
                Total a pagar:
                <span id="total">$0</span>
            </label>
        </div>
    </div> <center><input type="submit" value="Registrar" class="btn btn-primary btn-user btn-block"></center>
</main>

        <script>
      function calcularTotal() {
        const cantidad = document.getElementById("cantidad").value;
        const precio = document.getElementById("precio").value;
        const total = (cantidad * (precio*0.19))+(cantidad*precio);
        document.getElementById("total").textContent = "$" + total;
      }
    </script></form>