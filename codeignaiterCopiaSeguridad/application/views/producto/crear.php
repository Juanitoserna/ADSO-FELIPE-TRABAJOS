<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Crear producto</title>
</head>
<body>
    <div class="container">
    <?php echo form_open(''); ?>
    
    <div class="form-group">
        <?php 
            echo form_label('Serial', 'serial');
            $data = [
                'name'      => 'serial',
                'type'  => 'number',
                'value'     => $serial,
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
                'value' => $nombre,
                'class' => 'form-control input-lg',
            ];

            echo form_input($data);
        ?>
    </div>
    <div class="form-group">
        <?php 
            echo form_label('Descripcion', 'descripcion');
            $data = [
                'name'  => 'descripcion',
                'value' => $descripcion,
                'class' => 'form-control input-lg',
            ];

            echo form_textarea($data);
        ?>
    </div>
    <div class="form-group">
        <?php 
            echo form_label('Valor', 'valor');
            $data = [
                'name'  => 'valor',
                'type'  => 'number',
                'value' => $valor,
                'class' => 'form-control input-lg',
            ];

            echo form_input($data);
        ?>
    </div>
    <div class="form-group">
        <?php 
            echo form_label('Cantidad', 'cantidad');
            $data = [
                'name'  => 'cantidad',
                'type'  => 'number',
                'value' => $cantidad,
                'class' => 'form-control input-lg',
            ];

            echo form_input($data);
        ?>
    </div>
    
    <?php echo form_submit('mysubmit', 'Enviar', "class='btn btn-primary mt-2'");?>
    <a href="listado"  class="btn btn-success mt-2">Consultar</a>
    

    <?php echo form_close(); ?>
    </div> 
</body>
</html>