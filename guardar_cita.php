<?php
    session_start();

    // Valido que me envian el campo
    /*if (!isset($_REQUEST['id']) or $_REQUEST['id']==''){
        $error = 'Nombre incompleto';
    }else if (!isset($_REQUEST['id_usu']) or $_REQUEST['id_usu']==''){
        $error = 'apellido incompleto';
    }else*/ if (!isset($_REQUEST['id_psi']) or $_REQUEST['id_psi']==''){
        $error = 'email incompleto';
    }else if (!isset($_REQUEST['fecha']) or $_REQUEST['fecha']==''){
        $error = 'contraseña incompleto';
    }else if (!isset($_REQUEST['id_servicio']) or $_REQUEST['id_servicio']==''){
        $error = 'contraseña incompleto';
    }else if (!isset($_REQUEST['nombre']) or $_REQUEST['nombre']==''){
        $error = 'contraseña incompleto';
    }else if (!isset($_REQUEST['hora']) or $_REQUEST['hora']==''){
        $error = 'contraseña incompleto';
    }else if(!filter_var( $_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
        $error = 'Debe ser un email';
    }

    if (isset($error)){
        //$_SESSION['id'] = $_REQUEST['id'];
        //$_SESSION['id_usu'] = $_REQUEST['id_usu'];
        $_SESSION['id_psi'] = $_REQUEST['id_psi'];
        $_SESSION['fecha'] = $_REQUEST['fecha'];
        $_SESSION['id_servicio'] = $_REQUEST['id_servicio'];
        $_SESSION['nombre'] = $_REQUEST['nombre'];
        $_SESSION['hora'] = $_REQUEST['hora'];
        $_SESSION['error'] = $error;

        var_dump($_REQUEST);
        var_dump($_SESSION);
        
        Header("Location: appointment.html");
    }else{
        //$id = $_REQUEST['id'];
        $id_usu = $_SESSION['id_usu'];
        $id_psi = $_REQUEST['id_psi'];
        $fecha = $_REQUEST['fecha'];
        $id_servicio = $_REQUEST['id_servicio'];
        $nombre = $_REQUEST['nombre'];
        $hora = $_REQUEST['hora'];
        $conn = new mysqli("localhost", "root", "", "proyecto");
        
        $miInsert = "INSERT INTO citas (id_usu, id_psi, fecha, id_servicio, nombre, hora) VALUES ('$id_usu', '$id_psi', '$fecha', '$id_servicio', '$nombre', '$hora')";
        echo $miInsert;
        $conn -> query($miInsert);
        $conn -> close();
        var_dump($_REQUEST);
        var_dump($_SESSION);
        Header("Location: appointment.html");
    }

?>