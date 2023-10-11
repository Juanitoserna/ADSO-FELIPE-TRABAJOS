<?php 
  $dataHeader['titulo'] = "Eliminar Usuarios";
  $this->load->view('layouts/header', $dataHeader); 
?>
  <?php 
    $dataSidebar['session'] = $session;
    $dataSidebar['optionSelected'] = 'openDeleteUser';
    $this->load->view('layouts/sidebar', $dataSidebar); 
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="col-12 m-0 p-3">
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
    
    <table class="table">
        
      </table>
    </div>
  </div>
<?php 
  $this->load->view('layouts/footer'); 
?>