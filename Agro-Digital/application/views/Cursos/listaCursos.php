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
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">lISTADO DE CURSOS:</h3>
            </div>
            <div class="card-body d-flex justify-content-end">

                <a href="<?= base_url('index.php/administrador/Cursos/createCursoView') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Añadir Curso</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>curso_id</th>
                            <th>nombre</th>
                            <th>duracion</th>
                            <th>descripcion</th>
                            <th>precio</th>
                            <th>categoria</th>
                            <th>material_estudio</th>
                            <th>docente_id</th>

                        </tr>
                    </thead>

                    <tbody>
                        <!-- verificamos que la variable exista -->
                        <?php
                        if (isset($cursos)) {

                            foreach ($cursos as $curso) {
                        ?>
                                <tr>
                                    <th><?= $curso->curso_id ?></th>
                                    <td><?= $curso->nombre ?></td>
                                    <td><?= $curso->duracion ?></td>
                                    <td><?= $curso->descripcion ?></td>
                                    <td><?= $curso->precio ?></td>
                                    <td><?= $curso->categoria ?></td>
                                    <td><?= $curso->material_estudio ?></td>
                                    <td><?= $curso->docente_id ?></td>
                                    <td><a href="../Cursos/deleteCurso/<?= $curso->curso_id ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Borrar</a></td>
                                    <td><a href="../Cursos/editCurso/<?= $curso->curso_id ?>" class="btn btn-success"><i class="fas fa-edit"></i> Editar</a></td>
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