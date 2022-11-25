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
        $_SESSION['error'] = $error;
        Header("Location: admin.php");
    }else{
        $id_psi = $_REQUEST['id_psi'];
        $conn = new mysqli("localhost", "root", "", "proyecto");
        
        $miDeletep = "DELETE FROM psicologos where id_psi =" . $_REQUEST['id_psi'];
        $conn -> query($miDeletep);
        $conn -> close();
        Header("Location: admin.php");
    }
?>
</body>
</html>