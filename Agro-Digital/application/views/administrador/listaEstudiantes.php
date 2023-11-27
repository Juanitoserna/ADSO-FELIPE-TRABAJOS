<?php
// aqui cargamos el header
$title['titulo'] = "Agro-Digital";
$this->load->view('templates/admin/header', $title);
?>
<!-- ahora cargamos el sidebar del estudiante -->
<?php
// mandamos los datos de inicio de sesion a aqui a usuario
//$dataSidebar['session'] = $session;
$this->load->view('templates/admin/sidebar');
?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">lISTADO DE ESTUDIANTES:</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombres</th>
                            <th>Apellitos</th>
                            <th>Correo</th>
                            <th>Borrar</th>
                            <th>Editar</th>

                        </tr>
                    </thead>

                    <tbody>
                        <!-- verificamos que la variable exista -->
                        <?php
                        if (isset($usuarios)) {

                            foreach ($usuarios as $usuario) {
                        ?>
                                <tr>
                                    <th><?= $usuario->usuario_id ?></th>
                                    <td><?= $usuario->nombres ?></td>
                                    <td><?= $usuario->apellidos ?></td>
                                    <td><?= $usuario->correo ?></td>
                                    <td><a href="../Estudiantes/deleteUser/<?= $usuario->usuario_id ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Borrar</a></td>
                                    <td><a href="../Estudiantes/editUser/<?= $usuario->usuario_id ?>" class="btn btn-success"><i class="fas fa-edit"></i> Editar</a></td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <div class="alert alert-dark" role="alert">
                                NO HAY DATOS PARA MOSTRAR
                            </div>
                        <?php
                        }
                        ?>
                    </tbody>
                    <!-- este es el que se encarga de paginar nuestras listas -->

                </table>
            </div>

            <!-- /.card-body -->
        </div>
    </section>

</div>


<!-- cargamos el footer -->
<?php
$this->load->view('templates/admin/footer');
?>