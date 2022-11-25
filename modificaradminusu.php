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
    if (!isset($_REQUEST['id_usu']) or $_REQUEST['id_usu']==''){
        $error = 'id incompleto';
    }

    if (isset($error)){
        $_SESSION['id_usu'] = $_REQUEST['id_usu'];
        $_SESSION['contraseña'] = $_REQUEST['contraseña'];
        $_SESSION['error'] = $error;
        
        Header("Location: admin.php");
    }else{
        $id_psi = $_REQUEST['id_usu'];
        $contraseña = $_REQUEST['contraseña'];
        $conn = new mysqli("localhost", "root", "", "proyecto");
        
        $miUpdateau = "UPDATE usuarios SET contraseña='$contraseña' where id_usu=$id_usu";
        echo $miUpdateau;
        $conn -> query($miUpdateau);
        $conn -> close();
        Header("Location: admin.php");
    }
?>
</body>
</html>