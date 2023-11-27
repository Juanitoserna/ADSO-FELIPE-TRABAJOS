<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
	<!-- link de css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/principal.css">
	<!-- scrip para mensaje de alerta -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


	<title>Agro-Digital</title>
</head>

<body>
	<!-- Navbar  -->
	<nav class="navbar fixed-top navbar-expand-lg p-md-3">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url('index.php/Welcome') ?>">
				<img src="<?= base_url('assets/dist/img/logo.png'); ?>" alt="" width="170px">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<div class="mx-auto"></div>
				<ul class="navbar-nav">
					<li class="nav-item dropdown dropstart">
						<a href="#" class="nav-link text-white dropdown-toggle" data-bs-toggle="dropdown">
							Categorias
						</a>

						<?php if (isset($categorias) && !empty($categorias)) : ?>
							<ul class="dropdown-menu multi-column custom-bg" aria-labelledby="navbarDropdown">
								<?php foreach ($categorias as $categoria) : ?>
									<li><a class="dropdown-item" href="#"><?= $categoria->nombre_categoria ?></a></li>
								<?php endforeach; ?>
							</ul>
						<?php else : ?>
							<ul class="dropdown-menu multi-column custom-bg" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#">NO DISPONIBLE</a></li>
							</ul>
						<?php endif; ?>
					</li>
					<!-- Elementos responsivos para pantallas más pequeñas -->
					<li class="nav-item d-lg-none">
						<a class="nav-link text-white" data-bs-toggle="modal" data-bs-target="#exampleModal" href="<?= base_url('index.php/Welcome/vistaLogin')?>">Iniciar Sesion</a>
					</li>
					<li class="nav-item d-lg-none">
						<a class="nav-link text-white" href="<?= base_url('index.php/Welcome/registro');?>">Crear cuenta</a>
					</li>
					<!-- Elementos visibles solo en pantallas grandes -->
					<li class="nav-item d-none d-lg-block">
						<a class="nav-link text-white" href="<?= base_url('index.php/Welcome/vistaLogin')?>">Iniciar Sesion</a>
					</li>
					<li class="nav-item d-none d-lg-block">
						<a class="nav-link text-white" href="<?= base_url('index.php/Welcome/registro');?>">Crear cuenta</a>
					</li>
				</ul>
			</div>

		</div>
	</nav>