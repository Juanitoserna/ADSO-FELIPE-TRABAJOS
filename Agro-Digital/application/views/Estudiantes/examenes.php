<?php
// aqui cargamos el header
$title['titulo'] = "Agro-Digital";
$this->load->view('templates/header', $title);
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
                <h3 class="text-secondary mb-0">Mis Examenes terminado y por hacer</h3>
                <h2 class="mb-5">Bienvenido Estudiante</h2>
                <p>Examenes terminados o pentientes</p>
            </div>
        </div>
    </section>
</div>
<!-- cargamos el footer -->
<?php
$this->load->view('templates/footer');
?>