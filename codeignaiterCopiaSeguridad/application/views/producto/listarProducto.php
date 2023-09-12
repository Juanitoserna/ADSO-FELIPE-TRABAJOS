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
            <a href="guardar" class="btn btn-success">Crear Producto</a>
        <br>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Serial</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Valor</th>
              <th scope="col">Cantidad</th>
              <th colspan="3"></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($productos as $key => $producto) : ?>
            <tr>
              <th scope="row"><?php echo $producto->serial ?></th>
              <td><?php echo $producto->nombre ?></td>
              <td><?php echo $producto->descripcion ?></td>
              <td><?php echo $producto->valor ?></td>
              <td><?php echo $producto->cantidad ?></td>
              <td>
                <a href="guardar/<?php echo $producto->serial ?>" class="btn btn-success">Editar</a>
              </td>
              <td>
                <a href="ver/<?php echo $producto->serial ?>" class="btn btn-primary "> Ver </a>
              </td>
              <td>
                <a href="borrar/<?php echo $producto->serial ?>" class="btn btn-danger ">Borrar</a>
              </td>
            </tr>
            <?php endforeach; ?>
            
          </tbody>
        </table>
        
    </div>    
</body>
</html>