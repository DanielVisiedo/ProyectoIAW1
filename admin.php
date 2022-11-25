<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>DentCare - Dental Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
session_start();
    ?>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Cargando...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Cargando...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Cargando...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Apertura: Lun - Sáb : 6.00 am - 10.00 pm, Domingo Solo Urgencias </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>psicoloco@gmail.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+34 952 698 896 365</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><img class="mb-4" src="iconop.png" alt="" width="100" height="100">Psicoloco</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link">Inicio</a>
                <a href="about.html" class="nav-item nav-link">Sobre Nosotros</a>
                <a href="service.html" class="nav-item nav-link">Servicios</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Tarifas</a>
                        <a href="team.html" class="dropdown-item">Nuestros Profesionales</a>
                        <a href="testimonial.html" class="dropdown-item">Opiniones</a>
                        <a href="appointment.html" class="dropdown-item">Citas</a>
                    </div>
                </div>
                <a href="loggin.php" class="nav-item nav-link active">Tus Citas</a>
            </div>
            <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            <a href="appointment.html" class="btn btn-primary py-2 px-4 ms-3">Citas</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Tus Citas</h1>
                <a href="" class="h4 text-white">Inicio</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Tus Citas</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
        <div class="row g-5">
                <div>
                    <?php
                    
                    if(isset($_SESSION['logged']) and isset($_SESSION['id_usu'])){
                        echo "<p>Sesión de ".$_SESSION['nombre']."</p>";
                    }else{
                        header("location:loggin.php");
                    }
                    
                    $conn = new mysqli("localhost", "root", "", "proyecto");
                    $id=$_SESSION['id_usu'];
                    $sql1 = "select * from psicologos";
                    $result = $conn->query($sql1);
                    echo "<table border='1'>";
                    echo "<h3>Trabajadores</h3> <br> <button><a href='registerpsi.php'>crea uno nuevo</a></button>";
                    echo "<tr>";
                        echo "<th> Nombre </th>";
                        echo "<th> Apellido </th>";
                        echo "<th> id_psi </th>";
                        echo "<th> Email </th>";
                    echo "</tr>";
                    while($row = $result->fetch_assoc()) {
                        if (isset($_REQUEST['id_psi']) && ($row['id_psi'] == $_REQUEST['id_psi'])){
                            echo '<form action="modificaradminpsi.php" method="POST">';
                            echo '<td><input type="text" name="nombre" value="'.$row['nombre'].'"></td>';
                            echo '<td><input type="text" name="apellido" value="'.$row['apellido'].'"></td>';
                            echo '<td><input type="number" name="id_psi" value="'.$row['id_psi'].'"></td>';
                            echo '<td><input type="email" name="email" value="'.$row['email'].'"></td>';
                            echo '<td><button type="submit">Save</button></td>';
                            echo '<input type="hidden" name="id_psi" value="' .$row['id_psi']. '">';
                            echo '</form>';
                        }else{
                            echo "<tr>";
                            echo "<td>". $row['nombre'] ."</td>";     
                            echo "<td>". $row['apellido'] ."</td>";
                            echo "<td>" .$row['id_psi']. "</td>";
                            echo "<td>" .$row['email']. "</td>";
                            echo "<td><a href='deletepsi.php?id_psi=" .$row['id_psi']. "'/a>Delete</td>";
                            echo "<td><a href='admin.php?id_psi=" .$row['id_psi']. "'/a>Modify</td>";
                            echo "</tr>";
                        }
                    }
                    echo "</table>";
                    $conn->close();
                    ?>
                </div>

                <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <?php
                    
                    if(isset($_SESSION['logged']) and isset($_SESSION['id_usu'])){
                        echo "<p>Sesión de ".$_SESSION['nombre']."</p>";
                    }else{
                        header("location:loggin.php");
                    }
                    
                    $conn = new mysqli("localhost", "root", "", "proyecto");
                    $id=$_SESSION['id_usu'];
                    $sql2 = "select * from usuarios";
                    $result = $conn->query($sql2);
                    echo "<table border='1'>";
                    echo "<h3>Usuarios</h3>";
                    echo "<tr>";
                        echo "<th> Nombre </th>";
                        echo "<th> Apellido </th>";
                        echo "<th> id_usu </th>";
                        echo "<th> Email </th>";
                        echo "<th> Contraseña </th>";
                    echo "</tr>";
                    while($row = $result->fetch_assoc()) {
                        if (isset($_REQUEST['id_usu']) && ($row['id_usu'] == $_REQUEST['id_usu'])){
                            echo '<form action="modificaradminusu.php" method="POST">';
                            echo '<td><input type="number" name="id_usu" value="'.$row['id_usu'].'"></td>';
                            echo '<td><input type="text" name="contraseña" value="'.$row['contraseña'].'"></td>';
                            echo '<td><button type="submit">Save</button></td>';
                            echo '<input type="hidden" name="id_usu" value="' .$row['id_usu']. '">';
                            echo '</form>';
                        }else{
                        echo "<tr>";
                        echo "<td>". $row['nombre'] ."</td>";     
                        echo "<td>". $row['apellido'] ."</td>";
                        echo "<td>" .$row['id_usu']. "</td>";
                        echo "<td>" .$row['email']. "</td>";
                        echo "<td>" .$row['contraseña']. "</td>";
                        
                        echo "<td><a href='admin.php? id_usu=" .$row['id_usu']. "'/a>Modify</td>";
                        echo "</tr>";
                        }
                    }
                    echo "</table>";
                    $conn->close();
                    ?>
                </div> 
                    <?php
                    
                    if(isset($_SESSION['logged']) and isset($_SESSION['id_usu'])){
                        echo "<p>Sesión de ".$_SESSION['nombre']."</p>";
                    }else{
                        header("location:loggin.php");
                    }
                    
                    $conn = new mysqli("localhost", "root", "", "proyecto");
                    $id=$_SESSION['id_usu'];
                    $sql = ("select * from citas where fecha > now() order by(id_psi)");
                    $result = $conn->query($sql);
                    echo "<table border='1'>";
                    echo "<h3>Citas</h3>";
                    echo "<tr>";
                        echo "<th> Nombre </th>";
                        echo "<th> Psicologo </th>";
                        echo "<th> Servicio </th>";
                        echo "<th> Fecha </th>";
                    echo "</tr>";
                    while($row = $result->fetch_assoc()) {
                        if (isset($_REQUEST['id']) && ($row['id'] == $_REQUEST['id'])){
                            echo '<form action="modificaradmin.php" method="POST">';
                            echo '<td><input type="text" name="nombre" value="'.$row['nombre'].'"></td>';
                            echo '<td><input type="number" name="id_psi" value="'.$row['id_psi'].'"></td>';
                            echo '<td><input type="number" name="id_servicio" value="'.$row['id_servicio'].'"></td>';
                            echo '<td><input type="date" name="fecha" value="'.$row['fecha'].'"></td>';
                            echo '<td><button type="submit">Save</button></td>';
                            echo '<input type="hidden" name="id" value="' .$row['id']. '">';
                            echo '</form>';
                        }else{
                        echo "<tr>";
                        echo "<td>". $row['nombre'] ."</td>";
                        echo "<td>" .$row['id_psi']. "</td>";
                        echo "<td>". $row['id_servicio'] ."</td>";
                        echo "<td>" .$row['fecha']. "</td>";
                        echo "<td><a href='delete.php? id=" .$row['id']. "'/a>Delete</td>";
                        
                        echo "</tr>";
                        }
                    }
                    echo "</table>";
                    $conn->close();
                    ?>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4"><a href='loggin.php'>Inicia Sesion</a></button>
                        <button class="btn btn-dark px-4"><a href='destroy.php'>Log Out</a></button>  
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Popular Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@example.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+012 345 67890</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light py-4" style="background: #051225;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Your Site Name</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a><br>
                        Distributed by <a class="text-white border-bottom" href="https://themewagon.com">ThemeWagon</a>          
                    
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>