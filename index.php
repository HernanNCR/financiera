<?php
    $alert = '';

    if(!empty($_POST)){
        if(empty($_POST['usuario']) || empty($_POST['clave'])){
            $alert = 'Ingrese su usuario y su clave';
        } else{
            require_once "conexion.php";
            $user = $_POST['usuario'];
            $pass = $_POST['clave'];

            $query = mysqli_query($conection, "SELECT * FROM trabajador WHERE Correo='$user' AND contrasena ='$pass'");
            $resultado = mysqli_num_rows($query);

            if($resultado > 0){
                $data = mysqli_fetch_array($query);
                session_start();
                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $data['id'];
                $_SESSION['nombre'] = $data['usuario'];
                $_SESSION['contrasena'] = $data['clave'];

                header('Location: menu.html');
            } else{
                $alert = 'el usuario o clave està mal';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="imgs/icono.ico" >
</head>
<body>

    <header class="header">
    </header>

    <div class="logo">
        <img src="imgs/micro.png" >
    </div>

    
    <div class="sesion">
        <form action="" method="POST">
            <div class="form-floating " id="inicio">
                <input type="email" name="usuario" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating " id="inicio">
                <input type="password" name="clave" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating " id="inicio">
                <center><input type="submit" class="btn btn-primary" value="Iniciar Sesion"></center>
            </div>
        </form>
        
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>