<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>    
    <h1>Ingresa a la Pagina Web !!!</h1>
    <div class="container_ingreso">
        <form action="ingreso.php" method="POST">
        <h2>Iniciar Sesion</h2>
            <input type="text" name="correo_electronico" placeholder="Correo Electronico" > 
            <input type="password" name= "contrasena" placeholder="Contraseña" >
            <br>
            <button type="submit" name="ingresar">Ingresar</button>
            <form method="post">
                <button type="submit" name="cancelar">Cancelar</button>
            </form>
                <?php
                if(isset($_POST['cancelar'])){
                    header("Location: index.php");
                    exit;
                }
                ?>
        </form>
    </div> 
    
    <div>
        <?php
        include 'conexion.php';

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $correo_electronico = $_POST['correo_electronico'];
                $contrasena = $_POST['contrasena'];
                
                $validar = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE correo_electronico = '".$correo_electronico."'AND contrasena = '".$contrasena."'");

                if(mysqli_num_rows($validar) == 1){
                    header("Location: bienvenido.php");
                }else{
                    if(mysqli_num_rows($validar) == 0)
                    echo 'Usuario o Contraseña invalido';
                    exit;
                }
            }
        ?>
    </div>
</body>
</html>