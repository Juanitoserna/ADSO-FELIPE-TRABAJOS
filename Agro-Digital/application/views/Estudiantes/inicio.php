<?php
// aqui cargamos el header
$title['titulo']="Agro-Digital";
$this->load->view('templates/header',$title);
?>
<!-- ahora cargamos el sidebar del estudiante -->

<?php
// mandamos los datos de inicio de sesion a aqui a usuario
$dataSidebar['session'] = $session;

$this->load->view('templates/sidebar',$dataSidebar);
?>
<!-- aqui va toco el contenido del estudiante -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header ">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading text-center">
                <h2 class="mb-5">Bienvenido Estudiante</h2>
                <p>Aqui se le mostrarian los curso que le podria gustar suscribirse</p>

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
										<a href="#" class="btn-primary">Ver Más</a>
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
            </div>
        </div>
    </section>
</div>
<!-- cargamos el footer -->
<?php
$this->load->view('templates/footer');
?>