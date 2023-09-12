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
            <a href="guardar" class="btn btn-success">Crear Persona</a>
        <br>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Edad</th>
              <th colspan="3"></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($personas as $key => $persona) : ?>
            <tr>
              <th scope="row"><?php echo $persona->persona_id ?></th>
              <td><?php echo $persona->nombre ?></td>
              <td><?php echo $persona->apellido ?></td>
              <td><?php echo $persona->edad ?></td>
              <td>
                  <a href="guardar/<?php echo $persona->persona_id ?>" class="btn btn-success">Editar</a>
                  
              </td>
              <td>
                  <a href="ver/<?php echo $persona->persona_id ?>" class="btn btn-primary "> Ver </a>
                  
              </td>
              <td>
                  <a href="borrar/<?php echo $persona->persona_id ?>" class="btn btn-danger ">Borrar</a>
              </td>
            </tr>
            <?php endforeach; ?>
            
          </tbody>
        </table>
        
    </div>    
</body>
</html>
