<?php 
  $this->load->view('layouts/header'); 
?>
  <?php 
    $dataSidebar['session'] = $session;
    $dataSidebar['optionSelected'] = 'openCreateUser';
    $this->load->view('layouts/sidebar', $dataSidebar); 
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="col-12 m-0 p-3">

      <div class="row justify-content-center">
        <form class="container-sm" action="<?= base_url('index.php/admin/Usuario/createUser'); ?>" method="POST">
          <div class="card card-primary " style="margin-top: 110px ; ">
              <div class="card-header ">
                <h3 class="card-title ">FROMULARIO REGISTRAR USUARIO</h3>
              </div>
              <!-- ALERTAS DE REGISTRO A LA BASE DE DATOS -->
              <?php if (isset($dateIncompletos)): ?>
                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                  <h5><i class="icon fas fa-exclamation-triangle"></i> ALERTA!</h5>
                  Error campos vacios, recuerde que todos los campos deben ser diligenciados.
                </div>
              <?php endif ?>
              <?php if (isset($datosRepetidos)): ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                  <h5><i class="icon fas fa-ban"></i> PELIGRO!</h5>
                  Puede que los datos ya existan y hallan sido registrados antes por favor verifique los datos.
                </div>
              <?php endif ?>
                
              <?php if (isset($date_validos)): ?>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                  <h5><i class="icon fas fa-check"></i> CORRECTO!</h5>
                  El usuario ha sido registrado con exito.
                </div>
              <?php endif ?>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputCedula1">Cedula:</label>
                    <input type="number" class="form-control" id="exampleInputCedula1" placeholder="Cedula" name="new_cedula" requiered="">
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
        </form>
      </div>


    </div>
  </div>
<?php 
  $this->load->view('layouts/footer'); 
?>


      