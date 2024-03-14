
            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                    <div class="col-sm-12 ">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Compras</h6>
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">imagen</th>
                                        <th scope="col">Producto</th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Descripcion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($productos)):?>
                                        <?php foreach($productos as $c):?>
                                            <tr>
                                                <th scope="row"><?php echo $c->codigo;?></th>
                                                <td><?php echo $c->date;?></td>
                                                <td><?php $imagen_path = base_url('assets/archivos/' . $c->imagen);
                                                echo '<img src="' . $imagen_path . '" alt="Imagen del producto" style="max-width: 100px;">';?></td>
                                                <td><?php echo $c->producto;?></td>
                                                <td><?php echo $c->categoria;?></td>
                                                <td><?php $valor_formateado = number_format($c->precio, 0, ".", ".");
												echo  "$". $valor_formateado; ?></td>
                                                <td><?php echo $c->cantidad;?></td>
                                                <td><?php echo $c->descripcion;?></td>
                                            </tr>
                                        <?php endforeach;?>
                                    <?php endif;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>