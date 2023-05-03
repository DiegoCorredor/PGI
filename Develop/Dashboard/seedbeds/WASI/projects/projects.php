<?php
session_start();
if (!isset($_SESSION['dniUser'])) {
    header("Location: ../../../index.php");
}
$nombre = $_SESSION['name'];
$tipo_usuario = $_SESSION['rolUser'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="../../../../images/log.png">
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
                    <img src="../../../../images/log.png" class="" width="50px" alt=""></a>
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
                }
                mysqli_close($mysqli);
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
                                    <a class='collapse-item' href='#'>Servicios</a>
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
                                <img class="img-profile rounded-circle" src="../../../img/undraw_profile_3.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Editar perfil
                                </a>
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
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white rounded mb-4 pl-4 mx-2">
                            <p class="h2 text-gray-800 pt-3">Proyectos del semillero</p><hr>
                            <table class="table table-hover ">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Titulo</th>
                                        <th scope="col">Fecha de inicio</th>
                                        <th scope="col">Linea de investigación</th>
                                        <th scope="col">Palabras clave</th>
                                        <th scope="col">Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    require '../../../conn.php';
                                    require_once '../../../controller/viewProjects.php';
                                    viewProject($mysqli,1);
                                ?>
                                </tbody>
                            </table>

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