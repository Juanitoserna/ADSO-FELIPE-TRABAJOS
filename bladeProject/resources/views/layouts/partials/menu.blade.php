<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-NhxlAdCU3vv3Ef8ktHZyvLvYr72vBQVt1fApPmX+jnI4X4jOMb/ksXVhkJGmud79lwgR4iTpQsdFUtA3dU5Q6w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-black">
                <div class="d-flex flex-column align-items-center px-3 pt-2 text-white min-vh-100">
                    <img src="{{asset('assets/img/perfil.png')}}" alt="foto perfil" width="180" id="foto_perfil" class="ms-1">
                    <h4 class="mt-2">Nombre Usuario</h4>
                    <h5>(Ver Perfil)</h5>
                    <p>________________________________</p>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        
                        <div id="border_inferior">
                            <li class="nav-item">
                                <a href="#" class="nav-link align-middle px-0 white-text-with-green-border">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">COSULTAR TAREAS ASIGNADAS</span>
                                </a>
                            </li>

                        </div>
                        <div id="border_inferior" class="mt-4">
                            <li class="nav-item">
                                <a href="#" class="nav-link align-middle px-0 white-text-with-green-border">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">REGISTRO DE ACTIVIDAD</span>
                                </a>
                            </li>

                        </div>
                        <div id="border_inferior" class="mt-4">
                            <li class="nav-item">
                                <a href="#" class="nav-link align-middle px-0 white-text-with-green-border">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">GENERAR REPORTES</span>
                                </a>
                            </li>

                        </div>
                        <div id="border_inferior" class="mt-4">
                            <li class="nav-item">
                                <a href="#" class="nav-link align-middle px-0 white-text-with-green-border">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">HISTORIAL DE LABORES</span>
                                </a>
                            </li>

                        </div>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <div class="row">
                            <div class="col-auto m-0 p-0">
                                <img src="{{asset('assets/img/cerrar.png')}}" alt="boton_cerrar" width="50px">
                            </div>
                            <div class="col  mt-2 p-0">
                                <h3>Cerrar Sesión</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col  m-0 p-0">
                <nav class="navbar navbar-expand-lg color_navbar">
                    <div class="container d-flex justify-content-center">
                        <h1 class="text-black m-3">Registro de Actividades</h1>
                    </div>
                </nav>
                
                @yield('content_menu')
            </div>
        </div>
    </div>
    
</body>
</html>