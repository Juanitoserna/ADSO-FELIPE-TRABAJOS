<?php 
  $dataHeader['titulo'] = "Ver Usuarios";
  $this->load->view('layouts/header', $dataHeader); 
?>
  <?php 
    $dataSidebar['session'] = $session;
    $dataSidebar['optionSelected'] = 'openListUsers';
    $this->load->view('layouts/sidebar', $dataSidebar); 
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="col-12 m-0 p-3">
      <form action="../Inicio/busquedaIndividual" method="POST">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
        </div>

      </form>
      <div class="card mt-3">
        <!-- /.card-header -->
        <div class="card-body p-0 ">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Cedula</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Tipo</th>
                      <th>Estado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      
                      
                      foreach ($usuarios as $key => $usuario):
                    ?>
                      <tr>
                      
                        <td><?=  $usuario -> id ?></td>
                        <td><?=  $usuario -> cedula ?></td>
                        <td><?=  $usuario -> email ?></td>
                        <td><?=  $usuario -> password ?></td>
                        <td><?=  $usuario -> tipo ?></td>
                        <td><?=  $usuario -> estado ?></td>
                      
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
              <!-- /.card-body -->
      </div>
    </div>
  </div>

<?php 
  $this->load->view('layouts/footer'); 
?>