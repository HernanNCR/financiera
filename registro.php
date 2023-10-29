<?php
    include("conexion.php");

    if(!empty($_POST['RFC']) && !empty($_POST['curp']) && !empty($_POST['municipio']) && !empty($_POST['direccion']) && !empty($_POST['nombre']) && !empty($_POST['estado']) && !empty($_POST['telefono']) && !empty($_POST['fecha'])){
        $rfc = $_POST['RFC'];
        $curp = $_POST['curp'];
        $municipio = $_POST['municipio']; 
        $direccion = $_POST['direccion'];
        $nombre = $_POST['nombre'];
        $estado = $_POST['estado'];
        $telefono = $_POST['telefono'];
        $fecha = $_POST['fecha'];

        $sql = "INSERT INTO usuarios(rfc,curp,municipio,direccion,nombre,estado,telefono,fecha) VALUES (:rfc,:curp,:muni,:direc,:nom,:estado,:tel,:fecha)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":rfc",$rfc);
        $stmt->bindParam(":curp",$curp);
        $stmt->bindParam(":muni",$municipio); 
        $stmt->bindParam(":direc",$direccion);
        $stmt->bindParam(":nom",$nombre);
        $stmt->bindParam(":estado",$estado);
        $stmt->bindParam(":tel",$telefono);
        $stmt->bindParam(":fecha",$fecha);

        if($stmt->execute()){
            header("location: menu.php");
        } else{
            echo "error en la subida";
        }

    } else{
        
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/register.css"> 
    <link rel="shortcut icon" href="imgs/icono.ico" >
</head>
<body>
    
    <div class="navbar">
        <center>
            <div class="imagen">
                <img src="imgs/micro.png" width="60%">
            </div>
        </center>
        
        
        
        <center>
            <div class="barra">
                
                <h4>Usuario:</h4>
                <h5>Hernancillo de la cruz</h5>
                <br>
                <input type="submit" value="Usuarios" class="btn btn-success" id="boton">
                <div>
                    <div class="a" style="background-color: gray;"></div><a href="menu.php"><p>Menu</p></a>
                </div> 
                <div>
                    <div class="a" style="background-color: green;"></div><a href="registro.php"><p>Registro de Cliente</p></a>
                </div>
                <div>
                    <div class="a" style="background-color: gray;"></div><a href="otorgar.php"><p>Otorgar Prèstamos</p></a>
                </div>
                <div>
                    <div class="a" style="background-color: gray;"></div><a href="actualizar.php"><p>Actualizar Pagos</p></a>
                </div>
                
                <br>
                <input type="submit" value="Operaciones" class="btn btn-success" id="boton">
                <div>
                    <div class="a" style="background-color: gray;"></div><a href="seguimiento.php"><p>Seguimiento de Prestamo</p></a>
                </div>
                <div>
                    <div class="a" style="background-color: gray;"></div><a href="estado.php"><p>Estado de cuenta</p></a>
                </div>
                <br><br><br>
                <input type="submit" value="Cerrar Sesion" class="btn btn-danger" id="boton">
            </div>
        </center>
         
    </div>

    <form action="" method="POST"class="categoria" >
        <div class="cate">
            <center><h3>Registro Cliente</h3></center>
        </div>

       <div class="categoria1">
            <div class="form-floating mb-3">
                <input type="text" name="RFC" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">RFC</label>
            </div>
            
            <div class="form-floating mb-3">
                <input type="text" name="curp" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Curp</label>
            </div>
            
            <div class="form-floating mb-3">
                <input type="text" name="municipio" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Municipio</label>
            </div>
            
            <div class="form-floating mb-3">
                <input type="text" name="direccion" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Direccion</label>
            </div>
       </div>    
       <div class="categoria2">
            <div class="form-floating mb-3">
                <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Nombre Completo</label>
            </div>
            
            <div class="form-floating mb-3">
                <input type="text" name="estado" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Estado</label>
            </div>
            
            <div class="form-floating mb-3">
                <input type="text" name="telefono" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Telefono</label>
            </div>
            
            <div class="form-floating mb-3">
                <input type="date" name="fecha" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Fecha</label>
            </div>
            <input type="submit" value="Registrar" class="btn btn-success" id="Cancelar"> 
       </div>
    </form>
    



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>