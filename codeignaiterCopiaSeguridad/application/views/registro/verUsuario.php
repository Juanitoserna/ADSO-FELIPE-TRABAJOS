<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <br>
        <a href="../listado" class="btn btn-success">Regresar</a>
    <br>
    
    <div class="form-group">
        <?php 
            echo form_label('userName', 'userName');
            $data = [
                'name'      => 'userName',
                'value'     => $userName,
                'readonly'  => 'readonly',
                'class' => 'form-control input-lg',
            ];
            echo form_input($data);
        ?>
    </div>
    <div class="form-group">
        <?php 
            echo form_label('email', 'email');
            $data = [
                'name'  => 'email',
                'value' => $email,
                'readonly'  => 'readonly',
                'class' => 'form-control input-lg',
            ];

            echo form_input($data);
        ?>
    </div>
    <div class="form-group">
        <?php 
            echo form_label('password', 'password');
            $data = [
                'name'  => 'password',
                'type'  => 'passwrod',
                'value' => $password,
                'readonly'  => 'readonly',
                'class' => 'form-control input-lg',
            ];

            echo form_input($data);
        ?>
    </div>
    <div class="form-group">
        <?php 
            echo form_label('estado', 'estado');
            $data = [
                'name'  => 'estado',
                'value' => $estado,
                'readonly'  => 'readonly',
                'class' => 'form-control input-lg',
            ];

            echo form_input($data);
        ?>
    </div>
    
</div>    
</body>
</html>