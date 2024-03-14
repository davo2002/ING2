
            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                    <div class="col-sm-12 ">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Ventas</h6>
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Cedula</th>
                                        <th scope="col">Descripcion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($ventas)):?>
                                        <?php foreach($ventas as $c):?>
                                            <tr>
                                                <th scope="row"><?php echo $c->codigo;?></th>
                                                <td><?php echo $c->cedula;?></td>
                                                <td><?php echo $c->note;?></td>
                                            </tr>
                                        <?php endforeach;?>
                                    <?php endif;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>