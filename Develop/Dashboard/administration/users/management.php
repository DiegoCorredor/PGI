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

    <link rel="icon" href="../../../images/logo.png">
    <title>Galash :: Usuarios</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="../../../images/logo.jpg" class="" width="50px" alt="">
            </a>
    </div>
    <div class="h6 font-weight-bold text-center mx-3">Dashboard</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="../../dashboard.php">
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
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Semilleros</span>
        </a>
        <?php
        require '../../conn.php';
        require_once '../controller/loadSeedbeds.php';
        loadSeedbods($mysqli);
        require_once '../controller/viewManUsers.php';
        viewMenu($tipo_usuario);
        ?>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Otros
    </div>
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseOther" aria-expanded="false" aria-controls="collapseOther">
            <i class="fas fa-fw fa-info"></i>
            <span>Servicio de ayuda</span>
        </a>
        <div id="collapseOther" class="collapse" aria-labelledby="headingOther" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="../../help.php">Ayuda</a>
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
                        <input type="text" id="search" name="search" class="form-control bg-light border-0 small" placeholder="Ingrese la palabra clave a buscar" aria-label="Search" aria-describedby="basic-addon2">
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
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form action="search.php" method="post" class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" id="search" name="search" class="form-control bg-light border-0 small" placeholder="Ingrese la palabra clave a buscar" aria-label="Search" aria-describedby="basic-addon2">
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
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?php echo $nombre; ?>
                            </span>
                            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Editar perfil
                            </a>
                            <a class="dropdown-item" href="./help.php">
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
                <h1 class="h3 mb-1 text-gray-800">Gestión de usuarios</h1>
                <hr>
                <div class="row">
                    <?php if ($tipo_usuario == 4) {
                        echo "<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12'>
                    <div class='card border-left-primary border-bottom-primary'>
                        <div class='card-body'>
                            <h5 class='card-title'>Agregar usuario</h5>
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
                                <i class='fas fa-plus'> </i> Agregar usuario
                            </button>
                            <!-- Modal -->
                            <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Agregar un usuario</h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form action='./add.php' method='POST' enctype='multipart/form-data'>
                                                <div class='row'>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='firstName'>Nombre(s):</label>
                                                            <input type='text' class='form-control' name='firstName' id='firstName' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='lastName'>Apellidos:</label>
                                                            <input type='text' class='form-control' name='lastName' id='lastName' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='dniUser'>Tipo de DNI:</label>
                                                            <select name='dniType' id='dniType' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadTypeDni($mysqli); echo "
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='dniUser'>DNI:</label>
                                                            <input type='number' class='form-control' name='dniUser' id='dniUser' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='codeUser'>Código de usuario:</label>
                                                            <input type='number' maxlength='9' class='form-control' name='codeUser' id='codeUser' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='phoneUser'>Teléfono:</label>
                                                            <input type='number' maxlength='10' class='form-control' name='phoneUser' id='phoneUser' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='mailUser'>Email:</label>
                                                            <input type='email' class='form-control' name='mailUser' id='mailUser' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='rolUser'>Rol:</label>
                                                            <select name='rolUser' id='rolUser' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadRoles($mysqli); echo"
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='passwordUser'>Contraseña:</label>
                                                            <input type='password' class='form-control' name='passwordUser' id='passwordUser' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='photoUser'>Foto de perfil:</label>
                                                            <p class='text-muted text-center bg-warning rounded'>Recomendamos que la imagen sea cuadrada <br><strong>Debe ser .jpg, .png o .jpeg</strong></p>
                                                            <input type='file' class='btn btn-outline-dark form-control-file' name='photoUser' id='photoUser' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='statusUser'>Estado:</label>
                                                            <select name='statusUser' id='statusUser' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadStatus($mysqli); echo"
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='seedbedUser'>Semillero:</label>
                                                            <select name='seedbedUser' id='seedbedUser' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadSeedbeds($mysqli); echo"
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center'>
                                                        <button type='submit' class='btn btn-success w-100 '><i class='fas fa-save'> </i> Guardar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-xl-4 col-lg-4 col-md-4 col-sm-12'>
                    <div class='card border-left-warning border-bottom-warning'>
                        <div class='card-body'>
                            <h5 class='card-title'>Actualizar usuario</h5>
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-warning' data-toggle='modal' data-target='#exampleModal1'>
                                <i class='fas fa-edit'> </i> Actualizar usuario
                            </button>
                            <!-- Modal -->
                            <div class='modal fade' id='exampleModal1' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Actualizar un usuario</h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form action='./update.php' method='POST' enctype='multipart/form-data'>
                                                <div class='row'>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='firstName'>Seleccione el DNI del usuario</label>
                                                            <select name='dniUserS' id='dniUserS' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadDni($mysqli); echo"
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>

                                                <div class='row'>
                                                    <h5 class='mx-3 my-3'>Rellene todos los campos:</h5>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='firstName'>Nombre(s):</label>
                                                            <input type='text' class='form-control' name='firstName1' id='firstName1'>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='lastName'>Apellidos:</label>
                                                            <input type='text' class='form-control' name='lastName1' id='lastName1' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='dniUser'>Tipo de DNI:</label>
                                                            <select name='dniType1' id='dniType1' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadTypeDni($mysqli); echo"
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='dniUser'>DNI:</label>
                                                            <input type='number' class='form-control' name='dniUser1' id='dniUser1' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='codeUser'>Código de usuario:</label>
                                                            <input type='number' maxlength='9' class='form-control' name='codeUser1' id='codeUser1' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='phoneUser'>Teléfono:</label>
                                                            <input type='number' maxlength='10' class='form-control' name='phoneUser1' id='phoneUser1' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='mailUser'>Email:</label>
                                                            <input type='email' class='form-control' name='mailUser1' id='mailUser1' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='rolUser'>Rol:</label>
                                                            <select name='rolUser1' id='rolUser1' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadRoles($mysqli); echo"
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='passwordUser'>Contraseña:</label>
                                                            <input type='password' class='form-control' name='passwordUser1' id='passwordUser1' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='photoUser'>Foto de perfil:</label>
                                                            <p class='text-muted text-center bg-warning rounded'>Recomendamos que la imagen sea cuadrada <br><strong>Debe ser .jpg, .png o .jpeg</strong></p>
                                                            <input type='file' class='btn btn-outline-dark form-control-file' name='photoUser' id='photoUser' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='statusUser'>Estado:</label>
                                                            <select name='statusUser1' id='statusUser1' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadStatus($mysqli); echo"
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='seedbedUser'>Semillero:</label>
                                                            <select name='seedbedUser1' id='seedbedUser1' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadSeedbeds($mysqli); echo"
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center'>
                                                        <button type='submit' class='btn btn-success w-100 '><i class='fas fa-save'> </i> Actualizar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-xl-4 col-lg-4 col-md-4 col-sm-12'>
                    <div class='card border-left-danger border-bottom-danger'>
                        <div class='card-body'>
                            <h5 class='card-title'>Eliminar usuario</h5>
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#exampleModal2'>
                                <i class='fas fa-trash'> </i> Eliminar usuario
                            </button>
                            <!-- Modal -->
                            <div class='modal fade' id='exampleModal2' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Eliminar un usuario</h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form action='./delete.php' method='POST'>
                                                <div class='row'>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='firstName'>Seleccione el DNI del usuario a eliminar</label>
                                                            <select name='dniUserD' id='dniUserD' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadDni($mysqli); echo"
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center'>
                                                    <button type='submit' class='btn btn-danger w-100 '><i class='fas fa-trash'> </i> Eliminar</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
                    }
                    ?>
                    <div class="card my-3 py-3">
                        <div class="card-body">
                            <h5 class="card-title">Consultar usuarios</h5>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Nombre(s)</th>
                                            <th scope="col">Apellidos</th>
                                            <th scope="col">Tipo DNI</th>
                                            <th scope="col">DNI</th>
                                            <th scope="col">Código</th>
                                            <th scope="col">Teléfono</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Rol</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Semillero</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require_once '../../conn.php';
                                        require_once '../../controller/loadTypes.php';
                                        loadUsers($mysqli);
                                        ?>
                                    </tbody>
                                </table>
                            </div>


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
                        <img src="../../../images/uptc_logo_full.jpg" class="text-center" width="300px" alt=""><br>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <a class="btn btn-danger" href="./logout.php">Salir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>

</body>

</html>