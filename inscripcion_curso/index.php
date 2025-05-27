<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripcion Curso </title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>BIENVENIDOS A LA PLATAFORMA DE CURSOS ONLINE !!!</h1>
    
    <div class="lista_cursos"> 

    <?php
        $cursos = [
            ["id" => 1, "nombre" => "Informatica", "precio" => 120],
            ["id" => 2, "nombre" => "Arquitectura", "precio" => 100],
            ["id" => 3, "nombre" => "Robotica", "precio" => 150],
            ["id" => 4, "nombre" => "Electronica", "precio" => 130]
        ];
        
        function mostrarcursos($cursos){
            foreach ($cursos as $curso){
                echo "<div class='item_cursos'>";
                echo "<h2>" . $curso['nombre'] . "</h2>";
                echo "<p>Precio: $" . $curso['precio'] . "</p>";
                echo "<form action='informacion.php' method='POST'>";
                echo "<input type='hidden' name='id' value='" . $curso['id'] . "'>";
                echo "<button type='submit'>Informacion</button>";
                echo "</form>";
                echo "</div>";
            }
        }
        mostrarcursos ($cursos)
    ?>
    </div>
</body>
</html>