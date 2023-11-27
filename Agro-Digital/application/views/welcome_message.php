<?php
$this->load->view('templates/nav');
?>
<!-- Banner Image  -->
<div>
	<div class="banner-image  d-flex justify-content-center align-items-center">
		<div class="content text-center">
			<h1 class="text-white">Agrosistemas: Cultivando Éxito Digital</h1>
			<p class="text-light parrafo">Descubre la agricultura digital. Cursos virtuales para cultivar tus habilidades en el campo. ¡Prepárate para cosechar éxitos! ¡Únete ahora!</p>
			<button class="btn btn-primary">Unete Ahora!</button>
		</div>
	</div>

</div>

<!-- Main Content Area -->
<div class="container my-5 text-light">
	<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 mx-auto justify-content-center">
		<!-- aqui es donde vamos a mostrar los cursos -->
		<?php
		if (isset($cursos)) {
			// validamos que los datos existan y los mostramos 
			foreach ($cursos as $curso) { ?>
				<div class="col">
					<div class="card d-flex flex-column h-100">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSI_BjvT6jRhe5NTP3vmRDVozkR_3ExWuJ1eA&usqp=CAU" class="card-img-top img-fluid" alt="...">
						<div class="card-body flex-fill bg-dark">
							<h5 class="card-title "><?php echo $curso->nombre; ?></h5>
							<p class="card-text text-info"><?php echo $curso->descripcion; ?></p>
						</div>
						<div class="card-footer bg-primary">
							<a href="<?= base_url("index.php/Welcome/temasCursos/" . $curso->curso_id) ?>"><?php echo $curso->precio ?></a>
						</div>
					</div>
				</div>
		<?php
			}
		} else {
			// sino manejamos el error aquí
		}
		?>
	</div>
</div>




<?php
$this->load->view('templates/footerPrincipal');
?>