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
                <span class="brand-text font-weight-light text-light"><?=$session['nombres'];?></span>
                <span class="brand-text font-weight-light text-light"><?=$session['apellidos'];?></span>
            </div>
            <div class="info">
                <a href="#" class="d-block">
                   

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
                    <a href="<?= base_url('index.php/Administrador/Estudiantes/lista'); ?>" class="nav-link">
                        <!-- la version de font awesome para los iconos son v5.15.4 -->
                        <i class="fas fa-graduation-cap nav-icon"></i>
                        <p>
                            Listado de Estudiantes
                        </p>
                    </a>
                </li>
                <!-- PUEDE MODIFICAR LOS ICONOS Y LO QUE QUIERAN AQUI ESTE ES LO DE LA VISTA DE ADMINISTRADOR -->
                <li class="nav-item">
                    <a href="<?= base_url('index.php/Administrador/Estudiantes/viewDocente'); ?>" class="nav-link">
                        <i class="fas fa-chalkboard-teacher nav-icon"></i>
                        <p>
                          Administracion Docentes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('index.php/Administrador/Docentes/lista'); ?>" class="nav-link">
                        <i class="fas fa-chalkboard-teacher nav-icon"></i>
                        <p>
                          Listado Docentes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-book-open nav-icon"></i>
                        <p>
                          OTRA VISTA
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('index.php/Administrador/Cursos/lista'); ?>" class="nav-link">
                        <i class="fa-solid fa-file-circle-plus"></i>
                        <p>
                          LISTADO DE CURSOS
                        </p>
                    </a>
                </li>
               
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>

    <!-- /.sidebar -->
</aside>