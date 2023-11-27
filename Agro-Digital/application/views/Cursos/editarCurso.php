<?php
// aqui cargamos el header
$title['titulo'] = "Agro-Digital";
$this->load->view('templates/admin/header', $title);
?>
<!-- ahora cargamos el sidebar del estudiante -->

<?php
// mandamos los datos de inicio de sesion a aqui a usuario

$dataSidebar['session'] = $session;
$this->load->view('templates/admin/sidebar');
?>
<!-- aqui va toco el contenido del estudiante -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header ">
        <div class="container px-4 px-lg-5">

            <div class="content-section-heading text-center">
                <div class="text-center pb-4">
                    <h1>EDITAR CURSO</h1>
                </div>
                <!-- ARREGLAR EL CODIGO PARA EDITAR -->
                <!-- <form action="../modificar/<?= $cursos->cursos_id ?>" method="POST">
                    <div class="row">
                        <div class="col-6">
                            <label for="" class="form-label">Nombres:</label>
                            <input type="text" class="form-control" name="nombres" value="<?= $usuarios->nombres ?>" required>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" value="<?= $usuarios->apellidos ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="" class="form-label">E-mail:</label>
                            <input type="email" class="form-control" name="email" value="<?= $usuarios->correo ?>" required>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" name="password" value="<?= $usuarios->contrasena ?>" required>
                        </div>
                    </div>

                    <label for="" class="form-label">Tipo:</label>
                    <select class="form-control my-2" name="tipo" id="" disabled>
                        <option value="ESTUDIANTE">ESTUDIANTE</option>
                        <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                        <option value="DOCENTE" selected>DOCENTE</option>
                    </select>
                    <button class="btn btn-primary">Editar</button>
                    <a href="<?= base_url('index.php/Administrador/Admin/index')?>" class="btn btn-secondary">Cancelar</a>
                </form> -->
            </div>
        </div>
    </section>

    <!-- DEBERIA AGREGARLE UN BOTON QUE LO DEVUELVA A LA VISTA ANTERIOR SI EL DESEA CANCELAR EDITAR MENSAJE DE ALERTA Y VALIDACIONES TENER EN CUENTA  -->
</div>
<!-- cargamos el footer -->
<?php
$this->load->view('templates/admin/footer');
?>