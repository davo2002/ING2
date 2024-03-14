<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DS Tech Solutions</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo base_url("assets/archivos/logo.png") ?>">

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


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="administrador" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DS Tech </h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?php echo base_url("assets/admin/img/user.jpg")?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $this->session->admins->nombre; ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="administrador" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Clasificación</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="compras" class="dropdown-item">Compras</a>
                            <a href="ventas" class="dropdown-item">Ventas</a>
                        </div>
                    </div>
                    <a href="comprar" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Comprar</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Tipos de Personas</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="admins" class="dropdown-item">Administradores</a>
                            <a href="usuarios" class="dropdown-item">Usuarios</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="administrador" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        
                    </div>
                    <div class="nav-item dropdown">
                        
                    </div>
                    <!-- Perfil Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profileModalLabel">My Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Aquí puedes mostrar la información del perfil -->
                <p><strong>Nombre:</strong> <?php echo $this->session->admins->nombre; ?></p>
                <!-- Otros campos del perfil -->
            </div>
        </div>
    </div>
</div>

<!-- Configuración Modal -->
<div class="modal fade" id="settingsModal" tabindex="-1" aria-labelledby="settingsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="settingsModalLabel">Settings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Aquí coloca los campos que deseas que los usuarios puedan editar -->
                <form>
                    <!-- Campos de edición de configuración -->
                    <div class="mb-3">
                        <label for="editNombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="editNombre" value="<?php echo $this->session->admins->nombre; ?>">
                    </div>
                    <!-- Otros campos de edición -->

                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Enlaces de Dropdown actualizados -->
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        <img class="rounded-circle me-lg-2" src="<?php echo base_url("assets/admin/img/user.jpg")?>" alt="" style="width: 40px; height: 40px;">
        <span class="d-none d-lg-inline-flex"><?php echo $this->session->admins->nombre; ?></span>
    </a>
    <div class="dropdown-menu dropdown-menu-end m-0">
        <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#profileModal">My Profile</a>
        <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#settingsModal">Settings</a>
        <a href="login/cerrar" class="dropdown-item">Log Out</a>
    </div>
</div>

                </div>
            </nav>
            <!-- Navbar End -->
