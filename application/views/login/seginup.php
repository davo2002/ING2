<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DS Tech Solutions</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url("assets/admin/lib/owlcarousel/assets/owl.carousel.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css")?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url("assets/admin/css/bootstrap.min.css")?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url("assets/admin/css/style.css")?>" rel="stylesheet">
</head>


<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->

        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <form class="user" action="<?php echo base_url().'aggclientes'?>" method="post"enctype="multipart/form-data">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                        <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="tech" class="">
                                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DS Tech Solutions</h3>
                                </a>
                                <h3>Sign Up</h3>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText"REQUIRED  name="nombre" placeholder="Hernan">
                                <label for="floatingText">Nombre</label>
                            </div><div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText"name="snombre" placeholder="David">
                                <label for="floatingText">Segundo Nombre</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText"REQUIRED name="apellido" placeholder="Sanchez">
                                <label for="floatingText">Apelliddo</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText"REQUIRED name="sapellido" placeholder="Mosquer">
                                <label for="floatingText">Segundo Apelliddo</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"REQUIRED name="correo" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword"REQUIRED name="contraseña" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText"REQUIRED name="pais" placeholder="Colombia">
                                <label for="floatingText">Pais</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText"REQUIRED name="ciudad" placeholder="Quibdo">
                                <label for="floatingText">Ciudad</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingTextREQUIRED "name="direccion" placeholder="Calle 26a">
                                <label for="floatingText">Direccion</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingText"REQUIRED name="cedula" placeholder="10000000">
                                <label for="floatingText">Cedula</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingText"REQUIRED name="codigo_postal" placeholder="270001">
                                <label for="floatingText">Codigo Postal</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingText"REQUIRED name="telefono" placeholder="3113212321">
                                <label for="floatingText">Telefono</label>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                            <p class="text-center mb-0">Already have an Account? <a href="login">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Sign Up End -->
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url("assets/admin/lib/chart/chart.min.js")?>"></script>
    <script src="<?php echo base_url("assets/admin/lib/easing/easing.min.js")?>"></script>
    <script src="<?php echo base_url("assets/admin/lib/waypoints/waypoints.min.js")?>"></script>
    <script src="<?php echo base_url("assets/admin/lib/owlcarousel/owl.carousel.min.js")?>"></script>
    <script src="<?php echo base_url("assets/admin/lib/tempusdominus/js/moment.min.js")?>"></script>
    <script src="<?php echo base_url("assets/admin/lib/tempusdominus/js/moment-timezone.min.js")?>"></script>
    <script src="<?php echo base_url("assets/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js")?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url("assets/admin/js/main.js")?>"></script>
</body>

</html>