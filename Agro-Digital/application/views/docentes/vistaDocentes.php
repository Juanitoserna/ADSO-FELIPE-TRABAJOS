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
	<!-- link de css -->
	<link rel="stylesheet" href="<?= base_url('assets/dist/css/principalDocente.css'); ?>">
	<!-- scrip para mensaje de alerta -->

	<title>Agro-Digital</title>
</head>

<body>
	<!-- ESTE ES EL ENLACE DEL NOMBRE DE LA PAGINA ESTAMOS TRABAJANDO CON LOS ICONOS DE LA VERSION 5.15.4 -->
	<!-- https://fontawesome.com/v5/search -->


	<!-- Navbar  -->
	<nav class="navbar fixed-top navbar-expand-lg  p-md-3">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="<?= base_url('assets/dist/img/logo.png'); ?>" alt="" width="170px">

			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNav">
				<div class="mx-auto"></div>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-white" href="" data-bs-toggle="modal" data-bs-target="#modalPerfilDocente">Perfil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="<?= base_url('index.php/Login/cerrarSesion') ?>">Cerrar Sesion</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Banner Image  -->
	<div>
		<div class="banner-image  d-flex justify-content-center align-items-center">
			<div class="content text-center">
				<h1 class="text-white">Agrosistemas: Cultivando Éxito Digital</h1>
				<p class="text-light parrafo">Descubre la agricultura digital. Cursos virtuales para cultilet tus habilidades en el campo. ¡Prepárate para cosechar éxitos! ¡Únete ahora!</p>
			</div>
		</div>

	</div>
	<!-- traeer los cursos solo asignados a ese docente en el caso contrario mostrarle mensaje diciendole que no tiene cursos asignados -->
	<div class="container my-4">
		<div class="row justify-content-around">
			<?php
			if (isset($cursos)) {
				foreach ($cursos as $curso) {
			?>
					<div class="col-md-4">
						<div class="card border-0 shadow">
							<img src="https://www.elheraldo.co/sites/default/files/articulo/2020/06/26/agricultura.jpg" class="card-img-top img-fluid" alt="...">
							<div class="card-body">
								<h3 class="card-title"><?php echo $curso->nombre; ?></h3>
								<p class="card-text"><?php echo $curso->descripcion; ?></p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="btn btn-primary m-1">VER MÁS</a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary m-1 ">Agregar tema</a>
									</div>
								</div>
							</div>
						</div>
					</div>
			<?php
				}
			} else {
				// Manejar el error aquí
			}
			?>
		</div>
	</div>

	<!-- Modal siempre va a el final-->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 400px;">
			<div class="modal-content" style="background-color: rgba(17, 26, 35, 1); border: none; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
				<div class="modal-body ">
					<h1 class="modal-title fs-5 text-light m-2" id="exampleModalLabel">Ingresar tema</h1>
					<!-- Formulario de inicio de sesión -->
					<form action="../../index.php/docente/ControlDocentes/guardarDatos" method="POST">
						<div class="input-group mb-3">
							<input type="text" name="tipo_contenido" class="form-control" placeholder="Tipo" required>
							<div class="input-group-append">
								<div class="input-group-text">

								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="text" name="titulo_contenido" class="form-control" placeholder="Titulo" required>
							<div class="input-group-append">
								<div class="input-group-text">

								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Enlace " name="enlace_contenido">
							<div class="input-group-append">

								<i class="fas fa-video"></i>
								<div class="input-group-text">

								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="date" class="form-control" name="fecha_publicacion" placeholder="Fecha" required>
							<div class="input-group-append">
								<div class="input-group-text">

								</div>
							</div>
						</div>

						<button type="submit" class="btn btn-primary btn-block ">Guardar</button>
					</form>
				</div>
			</div>
		</div>
	</div>



	<div class="modal fade" id="modalPerfilDocente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 400px;">
			<div class="modal-content" style="background-color: rgba(17, 26, 35, 1); border: none; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
				<div class="modal-body ">

					<div class="content-perfil text-center">
						<div class="profile-container">
							<div class="profile-box">
								<div class="profile-picture">
									<img src="" alt="">
								</div>
								<div>
									<h4><?php echo $session['nombres'] . ' ' . $session['apellidos']; ?></h4>
									<br>
									<div>
										<p><b>CORREO:</b> <?php echo $session['correo']; ?></p>
										<p><b>USUARIO:</b> <?php echo $session['rol']; ?></p>
									</div>
									<!-- Agrega más información del usuario según tus necesidades -->

									<!-- Puedes agregar enlaces para editar el perfil, cerrar sesión, etc. -->
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 400px;">
			<div class="modal-content" style="background-color: rgba(17, 26, 35, 1); border: none; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
				<div class="modal-body ">
					<h1 class="modal-title fs-5 text-light m-2" id="exampleModalLabel">INFORMACION</h1>
					<div>
						<div class="banner-image d-flex justify-content-center align-items-center ">
							<div class="content text-center">
								<div class="profile-container">
									<div class="profile-picture">

										<a href=""></a>
									</div>
									<div>
										<div>
											<p><b>Fecla:</b> <?php echo $contenido_cursos['fecha_publicacion']; ?></p>
											<p><b>Fecla:</b> <?php echo $contenido_cursos['tipo_contenido']; ?></p>
											<p><b>Fecla:</b> <?php echo $contenido_cursos['titulo_contenido']; ?></p>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>