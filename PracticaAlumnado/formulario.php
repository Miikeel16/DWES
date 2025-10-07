<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Formulario de Registro</title>
    
</head>
<body>

<div class="contenedor">
    <form action="registro.php" method="POST">
        <h2>Registro de Estudiante</h2>

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellidos">Apellidos</label>
        <input type="text" id="apellidos" name="apellidos" required>

        <label for="fecha_nacimiento">Fecha de nacimiento</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>

        <label for="curso">Curso en el que está matriculado</label>
        <select id="curso" name="curso" required>
            <option value="">Selecciona tu curso</option>
            <option value="1">1º ESO</option>
            <option value="2">2º ESO</option>
            <option value="3">3º ESO</option>
            <option value="4">4º ESO</option>
        </select>

        <label for="correo">Email de Educamos</label>
        <input type="email" id="correo" name="correo" required>

        <label for="contraseña">Contraseña de Educamos</label>
        <input type="password" id="contraseña" name="contraseña" required>

        <button type="submit">Registrar</button>
    </form>
</div>

<div class="contenedor">

    <!-- //FORMATO TABLA -->
<?php
    include 'conexiones.php';
    $query = "SELECT nombre, apellidos, curso FROM alumnado";
    $result = mysqli_query($conexion, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<h2>Listado de Alumnos Registrados</h2>";
        echo "<table>";
        echo "<tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Curso</th>
              </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
            echo "<td>" . htmlspecialchars($row['apellidos']) . "</td>";
            echo "<td>" . htmlspecialchars($row['curso']) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No hay alumnos registrados.</p>";
    }
?>

<!-- //FORMATO LISTA -->
<!-- <?php
    include 'conexiones.php';
    $query = "SELECT nombre, apellidos, curso FROM alumnado";
    $result = mysqli_query($conexion, $query);
 
    if ($result && mysqli_num_rows($result) > 0) {
        echo "<h2>Listado de Alumnos Registrados</h2>";
        echo "<ul>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>";
            echo htmlspecialchars($row['nombre']) . " " . htmlspecialchars($row['apellidos']) . " - " . htmlspecialchars($row['curso']);
            echo "</li>";
        }

        echo "</ul>";
    } else {
        echo "<p>No hay alumnos registrados.</p>";
    }
?> -->
</div>

</body>
</html>
