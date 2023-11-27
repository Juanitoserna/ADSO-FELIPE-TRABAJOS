<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cl-icon/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/dist/css/estilosLogin.css')?>">
    <title>Iniciar Sesion</title>
</head>

<body>
<div class="wrapper">
    <!-- Codigo para mostrarle que los campos ingresados estan vacios -->
   <?php if (isset($errorInData)){ ?>
            <div class="alert alert-danger">
                DATOS INCOMPLETOS
            </div>
        <?php } ?>

        <?php if (isset($datosInvalidos)){ ?>
            <div class="alert alert-danger">
                NO EXISTE UN USUARIO CON ESOS DATOS
            </div>
	<?php } ?>
    <!-- Formulario de inicio de sesión -->
    <form action="<?= base_url('index.php/Login/ValidarIngreso')?>" method="POST" class="form">
        <h1 class="title">Inicia Sesión</h1>
        <div class="inp">
            <input type="text" name="correo" id="correo" class="input" placeholder="Correo">
            <i class="fa-regular fa-envelope"></i>
        </div>
        <div class="inp">
            <input type="password" name="contrasena" id="contrasena" class="input" placeholder="Contraseña">
            <i class="fa-solid fa-lock"></i>
        </div>
        <button class="submit" type="submit">Iniciar</button>
        <p class="footer">¿No tienes una cuenta? <a href="<?= base_url('index.php/Welcome/registro');?>" class="link">Por favor, Registrate</a></p>
    </form>
    <div></div>
    <div class="banner">
        <h1 class="wel_text"> BIENVENIDO</h1>
        <p class="para">Registrate para acceder <br> al sistema</p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>