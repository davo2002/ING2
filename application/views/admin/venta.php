<h1>Modificar Venta</h1>
    <form method="post" action="">
        <label for="producto">Producto:</label>
        <input type="text" name="producto" value="<?php echo $compra_original['producto']; ?>" required>
        <br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" value="<?php echo $compra_original['cantidad']; ?>" required>
        <br>

        <label for="precio">Precio:</label>
        <input type="text" name="precio" value="<?php echo $compra_original['precio']; ?>" required>
        <br>

        <input type="submit" value="Guardar Cambios">
    </form>