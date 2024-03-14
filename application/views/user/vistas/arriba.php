<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://www.paypal.com/sdk/js?client-id=ASTzkDBEXlIdDPnwX_IajHp-fO0GUrVpjVzTayCW4VPuWTYp4_lktbV02uAvYOwqF-o0pjzxUHtWyJTt"></script>

    <title>DS Tech Solutions</title>
	<link rel="icon" type="image/png" href="<?php echo base_url("assets/archivos/logo.png") ?>">

		<!-- Bootstrap -->
    <!-- /NAVIGATION -->

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/user/css/bootstrap.min.css")?>"/>
		<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/user/css/slick.css")?>"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/user/css/slick-theme.css")?>"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/user/css/nouislider.min.css")?>"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="<?php echo base_url("assets/user/css/font-awesome.min.css")?>">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/user/css/style.css")?>"/>

</head>

<body>
    <!-- HEADER -->
    <header style="background-color: black; color: white;">
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +57 3174832248</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i>hdsanchez@miuniclaretiana.edu.co</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> COL</a></li>
						<li><a href="login"><i class="fa fa-user-o"></i> My Account</a></li>
						<li><a href="cerrar"><i class="fa fa-user-o"></i> Sign off</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="tech" class="logo">
									<img src="<?php echo base_url("assets/archivos/logo.png") ?>" alt="" width="200" height="150">
								</a>
							</div>
						</div>
						<!-- /LOGO -->
						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form id="searchForm">
									<select class="input-select" id="categorySelect">
										<option value="0">All Categories</option>
										<option value="COMPUTADORES">COMPUTADORES</option>
										<option value="PORTATILES">PORTATILES</option>
										<option value="PROCESADORES">PROCESADORES</option>
										<option value="PANTALLAS">PANTALLAS</option>
										<option value="RAM">RAM</option>
										<option value="GRAFICA">GRAFICA</option>
									</select>
									<input class="input" id="searchInput" placeholder="Search here">
									<button class="search-btn" type="button" onclick="performSearch()">Search</button>
								</form>
							</div>
						</div>

						<!-- /SEARCH BAR -->
						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								


								<!-- /Wishlist -->

								<!-- Cart -->
								

								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty" id="total-items">0</div>
									</a>
									<div class="cart-dropdown" id="cart">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
												</div>
												<div class="product-body" id="cart-list-section">
													
												</div>
											</div>
										</div>
										<div class="cart-summary">
											<small style="color: white;"><span id="total-items-summary" class="qty">0</span> Item(s) selected</small>
											<h5 style="color: Red;">SUBTOTAL: $<span id="total-value">0</span></h5>
										</div>
										<div class="cart-btns">
											<a onclick="vaciarCarrito()" style="color: white;">Vaciar carrito <i class="fa fa-arrow-circle-right"></i></a>
											<a href="checkout" style="color: white;">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>


								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    