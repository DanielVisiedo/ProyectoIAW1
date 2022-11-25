<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();

    // Valido que me envian el campo
    if (!isset($_REQUEST['nombre']) or $_REQUEST['nombre']==''){
        $error = 'Nombre incompleto';
    }else if (!isset($_REQUEST['apellido']) or $_REQUEST['apellido']==''){
        $error = 'apellido incompleto';
    }else if (!isset($_REQUEST['email']) or $_REQUEST['email']==''){
        $error = 'email incompleto';
    }else if (!isset($_REQUEST['contraseña']) or $_REQUEST['contraseña']==''){
        $error = 'contraseña incompleto';
    }else if(!filter_var( $_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
        $error = 'Debe ser un email';
    }

    if (isset($error)){
        $_SESSION['nombre'] = $_REQUEST['nombre'];
        $_SESSION['apellido'] = $_REQUEST['apellido'];
        $_SESSION['email'] = $_REQUEST['email'];
        $_SESSION['contraseña'] = $_REQUEST['contraseña'];
        $_SESSION['error'] = $error;
        Header("Location: loggin.php");
    }else{
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $email = $_REQUEST['email'];
        $contraseña = $_REQUEST['contraseña'];
        $conn = new mysqli("localhost", "root", "", "proyecto");
        
        $miInsert = "INSERT INTO psicologos (nombre, apellido, email, contraseña) VALUES ('$nombre', '$apellido', '$email', '$contraseña')";
        $conn -> query($miInsert);
        $conn -> close();
        Header("Location: admin.php");
    }

?>
</body>
</html>