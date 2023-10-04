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
                <?php echo form_open(''); ?>
                
                <div class="form-group">
                    <?php 
                        echo form_label('Serial', 'serial');
                        $data = [
                            'name'      => 'serial',
                            'type'  => 'number',
                            'value'     => $id,
                            'class' => 'form-control input-lg',
                        ];
                        echo form_input($data);
                    ?>
                </div>
                <div class="form-group">
                    <?php 
                        echo form_label('Nombre', 'nombre');
                        $data = [
                            'name'  => 'nombre',
                            'value' => $cedula,
                            'class' => 'form-control input-lg',
                        ];
        
                        echo form_input($data);
                    ?>
                </div>
                <div class="form-group">
                    <?php 
                        echo form_label('Nombre', 'nombre');
                        $data = [
                            'name'  => 'nombre',
                            'value' => $email,
                            'class' => 'form-control input-lg',
                        ];
        
                        echo form_input($data);
                    ?>
                </div>
                <div class="form-group">
                    <?php 
                        $data = [
                                'class' => 'form-select',
                        ];
                        $options = [
                            'ADMIN'  => 'ADMIN',
                            'VENDEDOR'  => 'VENDEDOR',
                        ];
                        echo form_label('Estado: ');
                        echo form_dropdown('estado', $options , 'large',$data);
                    ?>
                </div>
                <div class="form-group">
                    <?php 
                        $data = [
                                'class' => 'form-select',
                        ];
                        $options = [
                            'ACTIVO'  => 'ACTIVO',
                            'INACTIVO'  => 'INACTIVO',
                        ];
                        echo form_label('Estado: ');
                        echo form_dropdown('estado', $options , 'large',$data);
                    ?>
                </div>
            
                <?php echo form_submit('mysubmit', 'Enviar', "class='btn btn-primary mt-2'");?>
                <a href="listado"  class="btn btn-success mt-2">Consultar</a>
                
        
                <?php echo form_close(); ?>
            </div> 
          
        </div>
              <!-- /.card-body -->
      </div>
    </div>
  </div>
<?php 
  $this->load->view('layouts/footer'); 
?>