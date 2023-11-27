<!-- HAGA VALIDACIONES DE INICIO DESSION PARA QUE LA MANDEN EN EL SIDEBAR PARA QUE PUEDAN MOSTRAR EL NOMBRE Y LOS DEMAS DATOS QUE QUIERAN UTILIZAR USEN DE EJEMPLO MIS VISTA DE ESTUDIANTES COMO LO HAGO PARA QUE SE GUIEN -->

<?php
// aqui cargamos el header
$title['titulo'] = "Agro-Digital";
$this->load->view('templates/admin/header', $title);
?>
<!-- ahora cargamos el sidebar del estudiante -->

<?php
// mandamos los datos de inicio de sesion a aqui a usuario


$this->load->view('templates/admin/sidebar');
?>
<!-- aqui va toco el contenido del estudiante -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header ">
        <div class="container px-4 px-lg-5">

            <div class="content-section-heading text-center">
                <h1>Administracion de Docentes</h1>
            </div>
        </div>
    </section>
</div>
<!-- cargamos el footer -->
<?php
$this->load->view('templates/admin/footer');
?>
