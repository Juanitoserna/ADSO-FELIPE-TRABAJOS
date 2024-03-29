<?php 
  $dataHeader['titulo'] = "Editar Usuarios";
  $this->load->view('layouts/header', $dataHeader); 
?>
  <?php 
    $dataSidebar['session'] = $session;
    $dataSidebar['optionSelected'] = 'openEditUser';
    $this->load->view('layouts/sidebar', $dataSidebar); 
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="col-12 m-0 p-3">
      <div class="row">
        <div class="col-2">
          <button class="btn btn-primary m-0 ">
            <a href="<?= base_url('index.php/admin/Inicio/openCreateUser') ?>"  class="text-white" >
                <i class="fas fa-plus-square"></i>
                <p class="m-0 p-0">
                  Crear Usuario
                </p>
    
            </a>

          </button>

        </div>
      </div>
      <div class="card">
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
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $cont = 0; 
                          foreach ($usuarios as $key => $usuario):
                          
                        ?>
                          <tr>
                            <td><?=  $usuario -> id ?></td>
                            <td><?=  $usuario -> cedula ?></td>
                            <td><?=  $usuario -> email ?></td>
                            <td><?=  $usuario -> password ?></td>
                            <td><?=  $usuario -> tipo ?></td>
                            <td><?=  $usuario -> estado ?></td>
                            <td>
                              <a href="guardar/<?php echo $usuario->id ?>" class="btn btn-success">Editar</a>
                            </td>
                            <td>
                              <a href="borrar/<?php echo $usuario->id ?>" class="btn btn-danger ">Borrar</a>
                            </td>
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
  </div>

<?php 
  $this->load->view('layouts/footer'); 
?>