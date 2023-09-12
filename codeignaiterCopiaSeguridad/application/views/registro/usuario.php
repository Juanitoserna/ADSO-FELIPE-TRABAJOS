<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    <!-- ALERT -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>
    <title>REGISTRAR USUARIO</title>
</head>
<body>
<div class="container border mt-3 shadow-lg p-3 mb-5 bg-white rounded" style="background: black;">
    <h3 class="text-center mt-2 mb-2 text-primary">REGISTRO DE USUARIO</h3>
    <?php echo form_open(''); ?>
    
        <div class="form-group">
            <?php 
                echo form_label('Nombre De Usuario', 'userName');
                $data = [
                    'name'      => 'userName',
                    'value' => $userName,
                    'readonly' => 'readonly',
                    'class' => 'form-control input-lg',
                ];
                echo form_input($data);
            ?>
        </div>
        <br>
        <div class="form-group">
            <?php 
                echo form_label('Email', 'email');
                $data = [
                    'name'  => 'email',
                    'class' => 'form-control input-lg',
                    'readonly' => 'readonly',
                    'value' => $email,
                    'type' => 'email',
                ];

                echo form_input($data);
            ?>
        </div>
        <br>
        <div class="form-group">
            <?php 
                echo form_label('Contraseña', 'password');
                $data = [
                    'name'  => 'password',
                    'type'  => 'password',
                    'value' => $password,
                    'class' => 'form-control input-lg',
                    'readonly' => 'readonly',
                ];

                echo form_input($data);
            ?>
        </div>
        <br>
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
        <br>
        <div class="text-center mb-3">

            <?php echo form_submit('mysubmit', 'Enviar', "class='btn btn-primary '");?>
            <a href="listado" class="btn btn-secondary ms-3 ">Ver Listado</a>
        </div>
        <?php echo form_close(); ?>
        <div class="col-12 m-0 mt-3 p-0 text-center">
            <div class="col-12 m-0 p-0">
                <p class="m-0 p-0">
                    ¿Desesa Iniciar Sesion?
                    <a href="iniciarSession" title="Crear Nuevo Usuario">Click aquí</a>
                </p>
            </div>

        </div>

</div>    
</body>
</html>