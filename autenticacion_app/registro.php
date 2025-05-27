<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ahora puedes registrarte !!!</h1>
    <div class="container_registro">
        <form action="registro.php" method="POST">
            <h2>Ingresa tus datos</h2>
            <input type="text" name="nombre_completo" placeholder="Nombre Completo" > 
            <input type="text" name="usuario" placeholder="Usuario" >
            <input type="text" name="correo_electronico" placeholder="Correo Electronico" >  
            <input type="password" name="contrasena" placeholder="Contraseña" >
            <input type="password" name="confirmar_contrasena" placeholder="Confirmar Contraseña" >
            <br>
                <button type="submit" name="enviar">Enviar</button> 
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

    <div class="condicional">
        <?php
        include 'conexion.php';
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nc = $_POST['nombre_completo'];
                $u = $_POST['usuario'];
                $ce = $_POST['correo_electronico'];
                $c = $_POST['contrasena'];
                $cc = $_POST['confirmar_contrasena'];

                $sql = "INSERT INTO usuarios (nombre_completo, usuario, correo_electronico, contrasena, confirmar_contrasena) VALUES (?, ?, ?, ?, ?)";
                $stmt = $mysqli->prepare($sql);
                $stmt->bind_param("sssss", $nc, $u, $ce, $c, $cc);
                $stmt->execute();
                $stmt->close();

                header("Location: ingreso.php");
                exit;               
            }               
        ?>
    </div>
</body>
</html>