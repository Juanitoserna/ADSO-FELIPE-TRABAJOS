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

            <h1>Registro de usuario</h1>
            <div class="content-section-heading text-center">
                <form action="../Docentes/registrarUsuario" method="POST">
                    <div class="container-fluid px-4">
                        <div class="text-center pb-4">
                            <h1>REGISTRO DOCENTE</h1>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="" class="form-label">Nombres:</label>
                                <input type="text" class="form-control" name="nombres" required>
                            </div>
                            <div class="col-6">
                                <label for="" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" name="apellidos" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="" class="form-label">E-mail:</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="col-6">
                                <label for="" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <label for="" class="form-label">Tipo:</label>
                        <select class="form-control my-2" name="tipo" id="" disabled>
                            <option value="ESTUDIANTE">ESTUDIANTE</option>
                            <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                            <option value="DOCENTE" selected>DOCENTE</option>
                        </select>
                        <button class="form button-confirm">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- LO MISMO ACA DEBERIA AGREGARLE UNA OPCION DE VOLVER ATRAS Y OBVIAMENTE AGREGARLE VALIDACIONES O MENSAJES DE ALERTA  -->
</div>
<!-- cargamos el footer -->
<?php
$this->load->view('templates/admin/footer');
?>


