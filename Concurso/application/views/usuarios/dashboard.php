<?php 
    $data['session'] = $session;
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
        }

        .dashboard-menu {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .dashboard-menu a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
        }

        .dashboard-menu a:hover {
            text-decoration: underline;
        }

        .dashboard-item {
            border: 1px solid #ddd;
            padding: 20px;
            margin: 10px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .dashboard-item:hover {
            background-color: #f0f0f0;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>INICIO ADMINISTRADOR</h1>
    </header>
    <div class="container">
        <div class="dashboard-menu">
            <a href="#">Inicio</a>
            <a href="#">Perfil</a>
            <a href="#">Configuración</a>
            <a href="<?=base_url('index.php/Login/cerrarSession')?>">Cerrar Sesión</a> <!-- En una aplicación real, este enlace debería dirigir a una página o acción para cerrar la sesión. -->
        </div>
        <div class="dashboard-item">
            <h2>Resumen de Ventas</h2>
            <p>Mostrar aquí información de ventas.</p>
        </div>
        <div class="dashboard-item">
            <h2>Usuarios Registrados</h2>
            <p>Mostrar aquí información de usuarios.</p>
        </div>
        <div class="dashboard-item">
            <h2>Estadísticas</h2>
            <p>Mostrar aquí estadísticas importantes.</p>
        </div>
    </div>
    <footer>
        &copy; 2023 Mi Empresa
    </footer>
</body>
</html>
