<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Inicia sesion</title>
    <link rel="shortcut icon" href="iconop.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    

    

<link href="bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }
      
      a {
        color: #FFFFFF;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .div1 {
        padding-left: 40%;
      }

    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <div class="div1">
    <main class="form-signin w-100 m-auto">
     
      <form action="iniciar_val.php" methotd="POST">
        <img class="mb-4" src="icono.png" alt="" width="300" height="250">
        <h1 class="h3 mb-3 fw-normal">Inicia Sesion</h1>

        <div class="form-floating">
          <input name ="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email'];?>">
          <label for="floatingInput">Correo electronico</label>
        </div>
        <div class="form-floating">
          <input name="contraseña" type="password" class="form-control" id="floatingPassword" placeholder="Password" value="<?php if (isset($_SESSION['contraseña'])) echo $_SESSION['contraseña'];?>">
          <label for="floatingPassword">Contraseña</label>
        </div>
        <br>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar Sesion</button>
        <h3>No estás registrado?</h3> <br>
        <button class="w-100 btn btn-lg btn-primary" ><a href='register.php'>Registrate</a></button>
        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
      </form>
    </main>
    </div>
    
  </body>
</html>
