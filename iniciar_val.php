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
    if (!isset($_REQUEST['email']) or $_REQUEST['email']==''){
        $error = 'email incompleto';
    }else if (!isset($_REQUEST['contraseña']) or $_REQUEST['contraseña']==''){
        $error = 'contraseña incompleto';
    }else if(!filter_var( $_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
        $error = 'Debe ser un email';
    }

    // validar si el usuario y contraseña existe
    // Select * from usuario where nombre=$nombre and pass=$pass;

    if (isset($error)){
        $_SESSION['email'] = $_REQUEST['email'];
        $_SESSION['contraseña'] = $_REQUEST['contraseña'];
        $_SESSION['error'] = $error;
        Header("Location: loggin.php");
    }else{
        $email = $_REQUEST['email'];
        $contraseña = $_REQUEST['contraseña'];
        $conn = new mysqli("localhost", "root", "", "proyecto");
        
        $miSelect = "SELECT * FROM usuarios  WHERE email='$email' and  contraseña='$contraseña'";
        $resultado = $conn -> query($miSelect);

        if($resultado->num_rows > 0){
            $_SESSION['logged'] = true;
            $fila = $resultado->fetch_assoc();
            if($fila['admin'] == 1){
                $_SESSION['id_usu'] = $fila['id_usu'];
                $_SESSION['nombre'] = $fila['nombre'];
                $_SESSION['apellido'] = $fila['apellido'];
                $_SESSION['email'] = $fila['email'];
                $_SESSION['contraseña'] = $fila['contraseña'];

                Header("Location: admin.php");
            }else {
                $_SESSION['id_usu'] = $fila['id_usu'];
                $_SESSION['nombre'] = $fila['nombre'];
                $_SESSION['apellido'] = $fila['apellido'];
                $_SESSION['email'] = $fila['email'];
                $_SESSION['contraseña'] = $fila['contraseña'];
                Header("Location: contact.php");
            }  
        }else{
            $_SESSION['error'] = "nombres y/o contras son incorrectas";
            Header("Location: loggin.php");
        }


        $conn -> close();
        
    }
?>
</body>
</html>