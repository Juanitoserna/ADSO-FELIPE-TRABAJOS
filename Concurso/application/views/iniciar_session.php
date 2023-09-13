

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body{
            background-image:url(https://png.pngtree.com/thumb_back/fw800/background/20220509/pngtree-vector-background-in-the-concept-of-technology-image_1344201.jpg);
            background-size:cover;
            background-repeat:no-repeat;
        }
        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(24, 20, 20, 0.987);
            box-sizing: border-box;
            box-shadow: inset 0 0 25px rgba(0,0,0,.6);
            border-radius: 10px;
            background-color: rgba(0,0,0,0.5);
        }
  
        .login-box .user-box {
            position: relative;
        }
  
        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }
        
        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }
        
        .login-box .user-box input:focus ~ label,
        .login-box .user-box input:valid ~ label {
            top: -20px;
            left: 0;
            color: #bdb8b8;
            font-size: 12px;
        }
        
        .login-box form button {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #ffffff;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px
        }
        
        .login-box button:hover {
            background: #03f40f;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #03f40f,
                        0 0 25px #03f40f,
                        0 0 50px #03f40f,
                        0 0 100px #03f40f;
        }
        
        .login-box button span {
            position: absolute;
            display: block;
        }
        
        @keyframes btn-anim1 {
            0% {
            left: -100%;
            }
        
            50%,100% {
            left: 100%;
            }
        }
        
        .login-box button span:nth-child(1) {
            bottom: 2px;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #03f40f);
            animation: btn-anim1 2s linear infinite;
        }
        button{
            background:black;
            border:none;

        }

    </style>
</head>
<body class="bg-dark">
<div class="login-box">
        <div class="justify-content-center">
            <h1 id="titulo" class="text-light text-center">INICIO SESION</h1>
        </div>
         <?php if (isset($campoError)){?>
            <div class="alert alert-danger">
                DATOS INCOMPLETOS
            </div>
        <?php } ?> 
        <form action="<?=base_url('index.php/Login/validarIngreso')?>" method="POST">
            <div class="user-box">
                <input class="<?=(isset($validarEmail) && $validarEmail!='')? 'is-valid':((isset($campoError))?'is-invalid':'') ?>" type="email" name="email" required="">
                <label>E-mail</label>
            </div>
            <div class="user-box">
                <input class="<?=(isset($validarEmail) && $validarPassword!='')? 'is-valid':((isset($campoError))?'is-invalid':'') ?>" type="password" name="password" required="">
                <label>Contraseña</label>
            </div><center>
            <button type="submit">INICIAR <span></span></button>
            <!-- <a type="submit">
                    Iniciar
                <span></span>
            </a></center> -->
        </form>
        <div class="col-12 text-center mt-2">
            <p class="m-0 p-0 text-light">
                ¿Deseas ser parte del sistema?
                <a href="#" title="Crear nuevo usuario" class="text-success">Click Aqui</a>
            </p>
        </div>
    </div>
</body>
</html>