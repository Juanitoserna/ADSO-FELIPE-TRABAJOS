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
                <div class="text-center pb-4">
                    <h1>EDITAR USUARIO</h1>
                </div>
                <form action="../modificar/<?= $usuarios->usuario_id ?>" method="POST">
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
                        <option value="ESTUDIANTE" selected>ESTUDIANTE</option>
                        <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                        <option value="DOCENTE">DOCENTE</option>
                    </select>
                    <button class="form button-confirm">Editar</button>
                </form>
            </div>
        </div>
    </section>

    <!-- DEBERIA AGREGARLE UN BOTON QUE LO DEVUELVA A LA VISTA ANTERIOR SI EL DESEA CANCELAR EDITAR MENSAJE DE ALERTA Y VALIDACIONES TENER EN CUENTA  -->
</div>
<!-- cargamos el footer -->
<?php
$this->load->view('templates/admin/footer');
?>