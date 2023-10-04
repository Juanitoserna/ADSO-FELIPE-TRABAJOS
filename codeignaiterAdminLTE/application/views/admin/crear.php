<?php 
  $this->load->view('layouts/header'); 
?>
  <?php
    $dataSidebar['optionSelected'] = 'openCreateUser';
    $this->load->view('layouts/sidebar', $dataSidebar); 
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="col-12 m-0 p-3">
      <div class="card">
        
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="container">
                <form action="../ModificarUsuario/<?=$usuario->id?>" method="post"> 
                    <label for="" class="form-label">Id:</label>
                    <input type="number" class="form-control" name="" value="<?=$usuario->id?>" readonly>
                    <label for="" class="form-label">Cedula:</label>
                    <input type="number" class="form-control" name="cedula" value="<?=$usuario->cedula?>" required>
                    <label for="" class="form-label">E-mail:</label>
                    <input type="email" class="form-control" name="email" value="<?=$usuario->email?>" placeholder="example@gmail.com" required>
                    <label for="" class="form-label">Contraseña:</label>
                    <input type="text" class="form-control" name="password" value="<?=$usuario->password?>" required>
                    <label for="" class="form-label">Tipo:</label>
                    <select class="form-control my-2" name="tipo" id="" value="<?=$usuario->tipo?>">
                        <option value="ADMIN">ADMIN</option>
                        <option value="VENDEDOR">VENDEDOR</option>
                    </select>
                    <label for="" class="form-label">Estado:</label>
                    <select name="estado" id="" class="form-control my-2" value="<?=$usuario->estado?>">
                        <option value="ACTIVO">ACTIVO</option>
                        <option value="INACTIVO">INACTIVO</option>
                    </select>

                    <button class="btn btn-outline-primary">Registrar</button>
                </form>
                
            </div> 
          
        </div>
              <!-- /.card-body -->
      </div>
    </div>
  </div>
<?php 
  $this->load->view('layouts/footer'); 
?>