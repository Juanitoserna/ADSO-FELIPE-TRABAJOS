<?php 
  $dataHeader['titulo'] = "Editar Usuarios";
  $this->load->view('layouts/header', $dataHeader); 
?>
  <?php 
    $dataSidebar['session'] = $session;
    $dataSidebar['optionSelected'] = 'openEditUser';
    $this->load->view('layouts/sidebar', $dataSidebar); 
  ?>
<?php
  // VARIABLE DE APOYO
  $indice = 0;
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="col-12 m-0 p-3">
      <div class="card">
        
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table">
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
                  <?php $cont++; ?>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="">
                    Modificar
                    <?php $indice = $cont++; ?>
                  </button>
                  </td>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>
              <!-- /.card-body -->
      </div>
    </div>
  </div>
  <!-- MODAL MODIFICAR5 USUARIOS -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modificar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- MODAL BODY -->
          <form>
            <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputCedula1">Cedula:</label>
                    <input type="number" class="form-control" id="exampleInputCedula1" placeholder="Cedula: <?php echo $indice; ?> " name="new_cedula" requiered="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Example@email.com" name="new_email" requiered="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña: </label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="new_password" requiered="">
                  </div>
                  <div class="form-group">
                    <label>Tipo</label>
                    <select class="form-control" name="new_tipo">
                      <option value="ADMIN">ADMIN</option>
                      <option value="VENDEDOR">VENDEDOR</option>
                    </select>
                  </div>
                  
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
<?php 
  $this->load->view('layouts/footer'); 
?>