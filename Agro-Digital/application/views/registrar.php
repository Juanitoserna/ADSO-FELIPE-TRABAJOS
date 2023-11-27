<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/estiloRegistrarse.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/principal.css'); ?>">
    <title>Registro</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">

            <a class="navbar-brand" href="../../index.php">
                <img src="<?= base_url('assets/dist/img/logo.png'); ?>" alt="" width="170px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url('index.php/Welcome/vistaLogin') ?>">Iniciar Sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="form-register mb-5">
        <form action="../../index.php/Registrar/registro" method="post">
            <h4>¡Crear cuenta!</h4>
            <div class="form-group">
                <label for="nombres" id="controls">Nombre</label>
                <input id="nombres" type="text" aria-label="Nombre" class="" name="nombres" required>
                <label for="apellidos" id="controls">Apellido</label>
                <input id="apellidos" type="text" aria-label="Apellido" class="" name="apellidos" required>
            </div>
            <div class="form-group">
                <label for="email" id="controls">Correo</label>
                <input id="email" type="text" class="" aria-label="Nombre de usuario" aria-describedby="basic-addon2" name="email" required>
            </div>
            <div class="form-group">
                <label for="password" id="controls">Contraseña</label>
                <input id="password" type="password" class="" name="password" required>
            </div>
            <div class="form-group">
                <input id="rol" type="text" class="" value="ESTUDIANTE" name="rol" disabled>
            </div>
            <button class="buttons">Registrarse</button>
        </form>
    </div>
</body>

</html>