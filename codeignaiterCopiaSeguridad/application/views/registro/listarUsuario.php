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
            <a href="guardar" class="btn btn-success mb-4">Crear Persona</a>
        <br>
        <table class="table table-bordered ">
          <thead>
            <tr class="table-primary">
              <th scope="col">id</th>
              <th scope="col">Nombre De Usuario</th>
              <th scope="col">Email</th>
              <th scope="col">Estado</th>
              <th></th>
              <th></th>
              <th></th>
              <!-- <th colspan="3"></th> -->
            </tr>
          </thead>
          <tbody>
            <?php foreach ($usuarios as $key => $usuario) : ?>
            <tr>
              <th scope="row"><?php echo $usuario->id ?></th>
              <td><?php echo $usuario->username ?></td>
              <td><?php echo $usuario->email ?></td>
              <td><?php echo $usuario->estado ?></td>
              <td class="text-center">
                  <a href="guardar/<?php echo $usuario->id ?>" class="btn btn-success">Editar</a>
                  
              </td>
              <td  class="text-center">
                  <a href="ver/<?php echo $usuario->id ?>" class="btn btn-primary "> Ver </a>
                  
              </td>
              <td class="text-center">
                  <a href="borrar/<?php echo $usuario->id ?>" class="btn btn-danger ">Borrar</a>
              </td>
            </tr>
            <?php endforeach; ?>
            
          </tbody>
        </table>
        
    </div>    
</body>
</html>
