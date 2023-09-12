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
    <?php echo form_open(''); ?>
    
    <div class="form-group">
        <?php 
            echo form_label('Nombre', 'nombre');
            $data = [
                'name'      => 'nombre',
                'value'     => $nombre,
                'class' => 'form-control input-lg',
            ];
            echo form_input($data);
        ?>
    </div>
    <div class="form-group">
        <?php 
            echo form_label('Apellido', 'apellido');
            $data = [
                'name'  => 'apellido',
                'value' => $apellido,
                'class' => 'form-control input-lg',
            ];

            echo form_input($data);
        ?>
    </div>
    <div class="form-group">
        <?php 
            echo form_label('Edad', 'edad');
            $data = [
                'name'  => 'edad',
                'type'  => 'number',
                'value' => $edad,
                'class' => 'form-control input-lg',
            ];

            echo form_input($data);
        ?>
    </div>
    
            <?php echo form_submit('mysubmit', 'Enviar', "class='btn btn-primary'");?>

    <?php echo form_close(); ?>
</div>    
</body>
</html>