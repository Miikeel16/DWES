<?php
    
    include 'conexiones.php';
    
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"] ?? '';
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $curso = $_POST["curso"];
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"] ?? '';
    $contraseña = hash('sha512', $contraseña);

    if (strpos($correo, '@') == false && strpos($correo, '.') == false) {
        echo "<script type='text/javascript'>alert('Error. Correo electrónico inválido.');</script>";
        header("Refresh: 0.1; url=formulario.php");
        exit;
    }
        $check = mysqli_query($conexion, "SELECT correo FROM alumnado WHERE correo = '$correo'");
        if (mysqli_num_rows($check) > 0) {
            echo "Este correo ya está registrado.";
            exit;
        }   


        $sqlInsert = "INSERT INTO alumnado (nombre, apellidos, fecha_nacimiento, curso, correo, contraseña) VALUES ('$nombre', '$apellidos', '$fecha_nacimiento', '$curso', '$correo', '$contraseña')";

        $result = mysqli_query($conexion, $sqlInsert);
        header("Refresh: 0.1; url=formulario.php");

?>