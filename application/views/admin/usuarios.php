
            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                    <div class="col-sm-12 ">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Usuarios</h6>
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombres </th>
                                        <th scope="col">Apellidos</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">Direccion</th>
                                        <th scope="col">Ciudad</th>
                                        <th scope="col">Cedula</th>
                                        <th scope="col">Correo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($usuarios)):?>
                                        <?php foreach($usuarios as $c):?>
                                            <tr>
                                                <th scope="row"><?php echo $c->id;?></th>
                                                <td><?php echo $c->nombre;?> <?php echo $c->snombre;?></td>
                                                <td><?php echo $c->apellido;?> <?php echo $c->sapellido;?></td>
                                                <td><?php echo $c->telefono;?></td>
                                                <td><?php echo $c->direccion;?></td>
                                                <td><?php echo $c->ciudad;?></td>
                                                <td><?php echo $c->cedula;?></td>
                                                <td><?php echo $c->correo;?></td>
                                            </tr>
                                        <?php endforeach;?>
                                    <?php endif;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>