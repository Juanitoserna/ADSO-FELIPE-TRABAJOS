<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url(); ?>assets/dist/img/logomini.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Agro Digital</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <?php echo explode(" ", $session['nombres'])[0] . " " . explode(" ", $session['apellidos'])[0] ?>

                </a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-header">OPCIONES</li>
                <li class="nav-item">
                    <a href="<?= base_url('index.php/estudiante/Estudiantes/misCursos'); ?>" class="nav-link">
                        <!-- la version de font awesome para los iconos son v5.15.4 -->
                        <i class="fas fa-graduation-cap nav-icon"></i>
                        <p>
                            Mis Cursos
                            <!-- en el span le voy a mostrar los cursos los cuales esta inscripto hasta  el momento -->
                            <span class="badge badge-info right">
                                <?php echo (isset($totalCursos) ? $totalCursos : "NO HAY") ?>
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('index.php/estudiante/Estudiantes/examenes'); ?>" class="nav-link">
                        <i class="fas fa-chalkboard-teacher nav-icon"></i>
                        <p>
                            Examenes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('index.php/estudiante/Estudiantes/notas'); ?>" class="nav-link">
                        <i class="fas fa-book-open nav-icon"></i>
                        <p>
                            Mis Notas
                        </p>
                    </a>
                </li>
                <!-- ESTE ICONO ES PARA MOSTRAR LAS OPCIONES DE COLORES Y DEMAS DE LA PAGINA -->
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                        <i class="fas fa-th-large nav-icon"></i>
                        <p>

                            Opciones de Vista
                        </p>
                    </a>
                </li> -->

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>

    <!-- /.sidebar -->
</aside>