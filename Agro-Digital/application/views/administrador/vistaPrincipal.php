<?php
// aqui cargamos el header
$title['titulo'] = "Agro-Digital";
$this->load->view('templates/admin/header', $title);
?>
<!-- ahora cargamos el sidebar del estudiante -->

<?php
// mandamos los datos de inicio de sesion a aqui a usuario
$dataSidebar['session'] = $session;

$this->load->view('templates/admin/sidebar', $dataSidebar);
?>
<!-- aqui va toco el contenido del estudiante -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header ">
        <div class="container px-4 px-lg-5">

            <div class="content-section-heading text-center">
                <h1>Bienvenido Administrador</h1>
            </div>
        </div>
    </section>
</div>
<!-- cargamos el footer -->
<?php
$this->load->view('templates/admin/footer');
?>