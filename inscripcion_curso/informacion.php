<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion de los Cursos</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="container">
        <?php
        $cursos = [
            ["id" => 1, "nombre" => "Informatica", "descripcion" => "El curso tiene una duracion de 100 horas", "precio" => 120],
            ["id" => 2, "nombre" => "Arquitectura", "descripcion" => "El curso tiene una duracion de 80 horas", "precio" => 100],
            ["id" => 3, "nombre" => "Robotica", "descripcion" => "El curso tiene una duracion de 150 horas", "precio" => 150],
            ["id" => 4, "nombre" => "Electronica", "descripcion" => "El curso tiene una duracion de 120 horas", "precio" => 130]
        ];
        
        function buscarcurso($id, $cursos) {
            foreach ($cursos as $curso) {
                if ($curso['id'] == $id) {
                    return $curso;
                }
            }
            return null;
        }
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
            $id = $_POST['id'];
            $curso = buscarcurso($id, $cursos);
    
            if ($curso) {
                echo "<h1>" . $curso['nombre'] . "</h1>";
                echo "<p><strong>Descripción:</strong> " . $curso['descripcion'] . "</p>";
                echo "<p><strong>Precio:</strong> $" . $curso['precio'] . "</p>";
            } else {
                echo "<p>Curso no encontrado.</p>";
            }
        } else {
            echo "<p>ID del curso no válido.</p>";
        }
        ?>
        <a href="registrarse.php"><button>Registrarse</button></a>
        <a href="index.php"><button>Volver</button></a>

    </div>
</body>
</html>