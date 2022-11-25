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
    if (!isset($_REQUEST['id_psi']) or $_REQUEST['id_psi']==''){
        $error = 'id incompleto';
    }

    if (isset($error)){
        $_SESSION['id_psi'] = $_REQUEST['id_psi'];
        $_SESSION['apellido'] = $_REQUEST['apellido'];
        $_SESSION['email'] = $_REQUEST['email'];
        $_SESSION['nombre'] = $_REQUEST['nombre'];
        $_SESSION['error'] = $error;
        
        Header("Location: admin.php");
    }else{
        $id_psi = $_REQUEST['id_psi'];
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $email = $_REQUEST['email'];
        $conn = new mysqli("localhost", "root", "", "proyecto");
        
        $miUpdateap = "UPDATE psicologos SET apellido='$apellido', email='$email', nombre='$nombre' where id_psi=$id_psi";
        echo $miUpdateap;
        $conn -> query($miUpdateap);
        $conn -> close();
        Header("Location: admin.php");
    }
?>
</body>
</html>