<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse al Curso Online</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Bienvenido al registro de la plataforma ONLINE!!! </h2>
            <div class="container_registrarse">
                <form action="registrarse.php" method="POST">
                    <h2>Ingresa tus datos</h2>
                    <input type="text" name="nombre" placeholder="Nombre" > 
                    <br><br>
                    <input type="text" name="apellido" placeholder="Apellido" >
                    <br><br>
                    <input type="int" name="cedula_identidad" placeholder="Cedula Identidad" > 
                    <br><br>
                    <input type="date" name="fecha_nacimiento" placeholder="Fecha Nacimiento" > 
                    <br><br>
                     <input type="text" name="correo_electronico" placeholder="Correo Electronico" > 
                    <br><br>
                    <input type="text" name="direccion" placeholder="Direccion" >
                    <br><br>
                    <input type="text" name="ciudad" placeholder="Ciudad" >               
                    <br><br>
                    <select name="curso" placeholder="Curso" >
                        <option value="informatica">Informatica</option>      
                        <option value="arquitectura">Arquitectura</option>
                        <option value="robotica">Robotica</option>
                        <option value="electronica">Electronica</option>
                    </select>
                    <br><br>                     
                    
                    <a href="0">Terminos y condiciones</a>
                    <br><br><br>
                    <input type="submit" name="enviar" class="btn" value="Enviar"> 
                        <form method="post">
                            <input type="submit" name="cancelar" class="btn" value="Cancelar"> 
                        </form>
                    <?php
                    if(isset($_POST['cancelar'])){
                    header("Location: index.php");
                    exit;
                    }
                    ?> 
                </form>  
            </div>
    </div>

    <div class="condicional">
        <?php
        include 'conexion.php';
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $n = $_POST['nombre'];
                $a = $_POST['apellido'];
                $ci = $_POST['cedula_identidad'];
                $fn = $_POST['fecha_nacimiento'];
                $ce = $_POST['correo_electronico'];
                $d = $_POST['direccion'];
                $c = $_POST['ciudad'];
                $cu = $_POST['curso'];

                $sql = "INSERT INTO estudiante (nombre, apellido, cedula_identidad, fecha_nacimiento, correo_electronico, direccion, ciudad, curso) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $mysqli->prepare($sql);
                $stmt->bind_param("ssssssss", $n, $a, $ci, $fn, $ce, $d, $c, $cu);
                $stmt->execute();
                $stmt->close();

                header("Location: index.php");
                exit;               
            }               
        ?>
    </div>
    
</body>
</html>