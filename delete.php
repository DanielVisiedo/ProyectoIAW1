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
        $_SESSION['id'] = $_REQUEST['id'];
        $_SESSION['error'] = $error;
        Header("Location: contact.php");
    }else{
        $id = $_REQUEST['id'];
        $conn = new mysqli("localhost", "root", "", "proyecto");
        
        $miDelete = "DELETE FROM citas where id =" . $_REQUEST['id'];
        $conn -> query($miDelete);
        $conn -> close();
        Header("Location: contact.php");
    }
?>
</body>
</html>