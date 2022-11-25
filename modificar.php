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
    if (!isset($_REQUEST['id']) or $_REQUEST['id']==''){
        $error = 'id incompleto';
    }

    if (isset($error)){
        $_SESSION['id_psi'] = $_REQUEST['id_psi'];
        $_SESSION['fecha'] = $_REQUEST['fecha'];
        $_SESSION['id_servicio'] = $_REQUEST['id_servicio'];
        $_SESSION['nombre'] = $_REQUEST['nombre'];
        $_SESSION['error'] = $error;
        
        Header("Location: contact.php");
    }else{
        $id = $_REQUEST['id'];
        $id_psi = $_REQUEST['id_psi'];
        $fecha = $_REQUEST['fecha'];
        $id_servicio = $_REQUEST['id_servicio'];
        $nombre = $_REQUEST['nombre'];
        $conn = new mysqli("localhost", "root", "", "proyecto");
        
        $miUpdate = "UPDATE citas SET id_psi='$id_psi', fecha='$fecha', id_servicio='$id_servicio', nombre='$nombre' where id=$id";
        echo $miUpdate;
        $conn -> query($miUpdate);
        $conn -> close();
        Header("Location: contact.php");
    }
?>
</body>
</html>