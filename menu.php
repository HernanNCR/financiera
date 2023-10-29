<?php
    include("conexion.php");
?>
<?php
    $cantidad = 0;
    $query = "SELECT * FROM usuarios";
    $stmt = $conn->query($query);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/principal.css"> 
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
                    <div class="a" style="background-color: green;"></div><a href="menu.php"><p>Menu</p></a>
                </div>
                <div>
                    <div class="a" style="background-color: gray;"></div><a href="registro.php"><p>Registro de Cliente</p></a>
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

    <div class="categoria">
        <div class="clientes">
            <div class="titulo">
                <center><h2>CLIENTES</h2></center>
            </div>
            <div class="tabla">
                <div class="espacio"></div>
                <table>
                    <thead> 
                        <tr>
                            <td><b>Nombre</b></td>
                            <td><b>Direccion</b></td>
                            <td><b>Telefono</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($registros as $fila) : ?>
                            <tr>
                                <td> <?php echo $fila->nombre; ?> </td>
                                <td> <?php echo $fila->direccion; ?> </td>
                                <td> <?php echo $fila->telefono; ?> </td>
                                <td><form action="">
                                    <center><input type="button" class="btn btn-danger" value="Borrar"></center>
                                </form> </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="espacio"></div>
            </div>
            
        </div>
       
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>