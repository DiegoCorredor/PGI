<?php
session_start();
if (!isset($_SESSION['dniUser'])) {
    header("Location: ../../../index.php");
}
$nombre = $_SESSION['name'];
$tipo_usuario = $_SESSION['rolUser'];
$photoUser = $_SESSION['photoUser'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="../../../../images/logo.png">
    <title>Galash :: WASI</title>

    <!-- Custom fonts for this template-->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="../../../../images/logo.png" class="" width="50px" alt=""></a>
                </div>
                <div class="h6 font-weight-bold text-center mx-3">Dashboard</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="../../../dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Página principal</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menú principal

            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Semilleros</span>
                </a>
                <?php
                require '../../../conn.php';
                require_once '../../../controller/loadSeedbeds.php';
                loadSeedbods($mysqli);/*
                $query = "SELECT * FROM seedbeds";
                $query2 = "SELECT alias FROM seedbeds";
                $result = mysqli_query($mysqli, $query);
                $result2 = mysqli_query($mysqli, $query2);
                $i = 0;
                foreach ($result as $row) {
                    $i++;
                    echo "<div id='collapseTwo' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>
                            <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseThree'
                                aria-expanded='true' aria-controls='collapseThree'>
                                <i class='fas fa-fw fa-cog'></i>
                                <span>" . $row['seedbed'] . "</span>
                            </a>
                            <div id='collapseThree' class='collapse' aria-labelledby='headingThree' data-parent='#collapseTwo'>
                                <div class='bg-white py-2 collapse-inner rounded'>
                                    <a class='collapse-item' href='../../../seedbeds/".$row['alias']."/info/info.php'><i class='fas fa-fw fa-info'></i>  -  Información</a>
                                    <a class='collapse-item' href='../../../seedbeds/".$row['alias']."/members/users.php'><i class='fas fa-fw fa-user'></i>  -  Integrantes</a>
                                    <a class='collapse-item' href='../../../seedbeds/".$row['alias']."/projects/projects.php'><i class='fas fa-fw fa-folder'></i>  -  Proyectos</a>
                                </div>
                            </div>
                        </div>";
                }*/
                ?>
            </li>
            <?php 
                if($tipo_usuario == 3 || $tipo_usuario == 4){
                    echo "<!-- Divider -->
                        <hr class='sidebar-divider'>

                        <!-- Heading -->
                        <div class='sidebar-heading'>
                            Gestión de usuarios
                        </div>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class='nav-item'>
                            <a class='nav-link' href='#' data-toggle='collapse' data-target='#collapsePages' aria-expanded='false'
                                aria-controls='collapsePages'>
                                <i class='fas fa-fw fa-users'></i>
                                <span>Acceso</span>
                            </a>
                            <div id='collapsePages' class='collapse' aria-labelledby='headingPages' data-parent='#accordionSidebar'>
                                <div class='bg-white py-2 collapse-inner rounded'>
                                    <a class='collapse-item' href='#'>Usuarios</a>
                                </div>
                            </div>
                        </li>";
                }
            ?>

            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Otros
            </div>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseOther" aria-expanded="false"
                    aria-controls="collapseOther">
                    <i class="fas fa-fw fa-info"></i>
                    <span>Servicio de ayuda</span>
                </a>
                <div id="collapseOther" class="collapse" aria-labelledby="headingOther" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../../../help.php">Ayuda</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form action="search.php" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" id="search" name="search" class="form-control bg-light border-0 small" placeholder="Ingrese la palabra clave a buscar"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form action="search.php" method="post" class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" id="search" name="search" class="form-control bg-light border-0 small"
                                            placeholder="Ingrese la palabra clave a buscar" aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php echo $nombre; ?>
                                </span>
                                <img class="img-profile rounded-circle" src="../../../img/profiles/<?php echo $photoUser; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="../../../help.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Servicio de ayuda
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir del sistema
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Semillero de investigación en accesibilidad web - WASI</h1>
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 bg-white rounded mb-4 pl-4 mx-2">
                            <p class="h2 text-gray-800 pt-3">Información general</p><hr>
                            <p class="h5 text-gray-800">Escuela y programa academico:</p>
                            <ul>
                                <li class="text-justify">Ingeniería de Sistemas y Computación</li>
                            </ul>
                            <p class="h5 text-gray-800">Objetivo general:</p>
                            <ul>
                                <li class="text-justify">Realizar procesos de investigación en el contexto de la accesibilidad web, que permitan al semillero convertirse en un referente en la temática de acceso universal para todos.</li>
                            </ul>
                            <p class="h5 text-gray-800">Justificación:</p>
                            <ul>
                                <li class="text-justify">La accesibilidad web se relaciona con las características dadas a los contenidos web, de manera que sea posible la navegabilidad y que los contenidos puedan ser transformados en forma correcta y visualizados a los usuarios, para lograrlo, los sitios web deben cumplir con unas directrices de accesibilidad y normas estándares establecidas y mantenidas por el organismo internacional W3C que se encarga de los aspectos relacionados con los contenidos que se visualizan en la red Internet a través de un lenguaje de marcas como el HTML y navegadores que lo interpretan. Por lo anterior es de gran importancia que las páginas de los sitios web tengan en cuenta y apliquen las normas que en materia de Accesibilidad Web son mantenidad por la W3C</li>
                            </ul>
                            <p class="h5 text-gray-800">Misión:</p>
                            <ul>
                                <li class="text-justify">El Semillero “Web Accessibility Semillero Investigación” (WASI) tiene la misión de convertirse en un referente en la temática de Accesibilidad Web bajo las normas y estándares de organizaciones internacionales como la W3C, que le permitan apoyar procesos de diseño y generación de contenidos web accesibles en beneficio de la comunidad académica y población en general</li>
                            </ul>
                            <p class="h5 text-gray-800">Visión:</p>
                            <ul>
                                <li class="text-justify">A 2025 ser un Semillero de Investigación reconocido a nivel institucional y regional en los temas de accesibilidad web</li>
                            </ul>

                        </div>
                        <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 bg-white rounded mb-4 pl-4 mx-2 text-center">
                            <p class="h2 text-gray-800 pt-3">Información adicional</p><hr>
                            <p class="h5 text-gray-800 text-left">Logotipo de WASI</p>
                            <img src="./logo.png" class="w-25 mb-3" alt="">
                            <br>
                            <p class="h5 text-gray-800 text-left">Investigadores de WASI</p>
                            <img src="./inv.jpg" class="w-50 rounded-circle mb-2" alt="">
                            <p class="h6 text-center">Jairo Armando Riaño Herrera</p><hr>
                            <p class="text-center">Docente Universidad Pedagógica y Tecnológica de Colombia<br>jairo.riaño@uptc.edu.co</p>
                        </div>
                    </div>
                    <!-- Content Row -->

                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <img src="../../../../images/uptc_logo_full.jpg" class="text-center" width="300px" alt=""><br>
                        <span>Copyright &copy; G.A.L.A.S.H. - UPTC Seccional Sogamoso <br>2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmación de cerrar sesión</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body"><strong>
                        <?php echo $nombre; ?>
                    </strong> selecicona por favor "Salir" para terminar la sesión.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger" href="../../../logout.php">Salir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../js/sb-admin-2.min.js"></script>

</body>

</html>