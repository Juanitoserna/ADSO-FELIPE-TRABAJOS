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
      <div class="card">
        
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table table-head-fixed text-nowrap">
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
  </div>
<?php 
  $this->load->view('layouts/footer'); 
?>