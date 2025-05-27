<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticacion de Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Autenticacion de Usuarios</h1>

    <div class="container_autenticacion">
        <div class="ingresar">
           <h3>Ya tienes una cuenta?</h3> 
           <p>Inicia sesion para ingresar a la pagina</p>
           <form method="post">
            <br>
           <button type="submit" name="ingresar">Ingresar</button>
           </form>
                <?php
                if(isset($_POST['ingresar'])){
                    header("Location: ingreso.php");
                    exit;
                }
                ?>
        </div>
        <br><br><br>        
        <div class="registrarse">
            <h3>Aun no tienes una cuenta?</h3> 
            <p>Registrate para que puedas ingresar a la pagina</p>
            <form method="post">
                <button type="submit" name="registrarse">Registrarse</button>
            </form>
                <?php
                if(isset($_POST['registrarse'])){
                    header("Location: registro.php");
                    exit;
                }
                ?>
        </div>
    </div>

</body>
</html>