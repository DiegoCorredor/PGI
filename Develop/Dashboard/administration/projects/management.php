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
    <title>Galash :: Proyectos</title>

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
                <h1 class="h3 mb-1 text-gray-800">Gestión de proyectos</h1>
                <hr>
                <div class="row">
                    <?php if ($tipo_usuario == 4) {
                        echo "<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12'>
                    <div class='card border-left-primary border-bottom-primary'>
                        <div class='card-body'>
                            <h5 class='card-title'>Agregar proyecto</h5>
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
                                <i class='fas fa-plus'> </i> Agregar proyecto
                            </button>
                            <!-- Modal -->
                            <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Agregar un proyecto</h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form action='./add.php' method='POST'>
                                                <div class='row'>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='codeProject'>Código:</label>
                                                            <input type='number' class='form-control' name='codeProject' id='codeProject' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='titleProject'>Titulo:</label>
                                                            <input type='text' class='form-control' name='titleProject' id='titleProject' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='nameProject'>Nombre:</label>
                                                            <input type='text' class='form-control' name='nameProject' id='nameProject' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='resumeProject'>Resumen:</label>
                                                            <input type='text' class='form-control' name='resumeProject' id='resumeProject' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='impactProject'>Impacto:</label>
                                                            <input type='text' class='form-control' name='impactProject' id='impactProject' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='impactLocationProject'>Ciudad de impacto:</label>
                                                            <input type='text' class='form-control' name='impactLocationProject' id='impactLocationProject' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='expectedResultsProject'>Resultados esperados:</label>
                                                            <input type='text' class='form-control' name='expectedResultsProject' id='expectedResultsProject' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='dateStartProject'>Fecha de inicio:</label>
                                                            <input type='date' class='form-control' name='dateStartProject' id='dateStartProject' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='dateEndProject'>Fecha final:</label>
                                                            <input type='date' class='form-control' name='dateEndProject' id='dateEndProject' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='investigationLineProject'>Linea de investigación:</label>
                                                            <select name='investigationLineProject' id='investigationLineProject' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadInvestigationLines($mysqli); echo"
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='statusProject'>Estado del proyecto:</label>
                                                            <select name='statusProject' id='statusProject' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadStatuses($mysqli); echo"
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='keywordsProject'>Palabras clave del proyecto:</label>
                                                            <select name='keywordsProject' id='keywordsProject' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadKeywords($mysqli); echo"
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='investigationGroupProject'>Grupo de investigación del proyecto:</label>
                                                            <select name='investigationGroupProject' id='investigationGroupProject' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadInvestigationGroups($mysqli); echo"
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='seedbedProject'>Semillero:</label>
                                                            <select name='seedbedProject' id='seedbedProject' class='form-control' required=''>";
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
                            <h5 class='card-title'>Actualizar proyecto</h5>
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-warning' data-toggle='modal' data-target='#exampleModal1'>
                                <i class='fas fa-edit'> </i> Actualizar proyecto
                            </button>
                            <!-- Modal -->
                            <div class='modal fade' id='exampleModal1' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Actualizar un proyecto</h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form action='./update.php' method='POST'>
                                                <div class='row'>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='firstName'>Seleccione el código del proyecto</label>
                                                            <select name='codeProjectU' id='codeProjectU' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadCodes($mysqli); echo"
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>

                                                <div class='row'>
                                                    <h5 class='mx-3 my-3'>Información guardada:</h5>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='codeProject'>Código:</label>
                                                            <input type='number' class='form-control' name='codeProject' id='codeProject' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='titleProject'>Titulo:</label>
                                                            <input type='text' class='form-control' name='titleProject' id='titleProject' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='nameProject'>Nombre:</label>
                                                            <input type='text' class='form-control' name='nameProject' id='nameProject' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='resumeProject'>Resumen:</label>
                                                            <input type='text' class='form-control' name='resumeProject' id='resumeProject' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='impactProject'>Impacto:</label>
                                                            <input type='text' class='form-control' name='impactProject' id='impactProject' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='impactLocationProject'>Ciudad de impacto:</label>
                                                            <input type='text' class='form-control' name='impactLocationProject' id='impactLocationProject' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='expectedResultsProject'>Resultados esperados:</label>
                                                            <input type='text' class='form-control' name='expectedResultsProject' id='expectedResultsProject' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='dateStartProject'>Fecha de inicio:</label>
                                                            <input type='date' class='form-control' name='dateStartProject' id='dateStartProject' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='dateEndProject'>Fecha final:</label>
                                                            <input type='date' class='form-control' name='dateEndProject' id='dateEndProject' required=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='investigationLineProject'>Linea de investigación:</label>
                                                            <select name='investigationLineProject' id='investigationLineProject' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadInvestigationLines($mysqli); echo"
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='statusProject'>Estado del proyecto:</label>
                                                            <select name='statusProject' id='statusProject' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadStatuses($mysqli); echo"
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='keywordsProject'>Palabras clave del proyecto:</label>
                                                            <select name='keywordsProject' id='keywordsProject' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadKeywords($mysqli); echo"
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='investigationGroupProject'>Grupo de investigación del proyecto:</label>
                                                            <select name='investigationGroupProject' id='investigationGroupProject' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadInvestigationGroups($mysqli); echo"
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='seedbedProject'>Semillero:</label>
                                                            <select name='seedbedProject' id='seedbedProject' class='form-control' required=''>";
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
                            <h5 class='card-title'>Eliminar proyecto</h5>
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#exampleModal2'>
                                <i class='fas fa-trash'> </i> Eliminar proyecto
                            </button>
                            <!-- Modal -->
                            <div class='modal fade' id='exampleModal2' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Eliminar un proyecto</h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form action='./delete.php' method='POST'>
                                                <div class='row'>
                                                    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                                                        <div class='form-group'>
                                                            <label for='firstName'>Seleccione el código del proyecto a eliminar</label>
                                                            <select name='codeProjectD' id='codeProjectD' class='form-control' required=''>";
                                                                require '../../conn.php';
                                                                require_once '../../controller/loadTypes.php';
                                                                loadCodes($mysqli); echo"
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
                            <h5 class="card-title">Consultar proyectos</h5>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Código</th>
                                            <th scope="col">Titulo del proyecto</th>
                                            <th scope="col">Nombre del proyecto</th>
                                            <th scope="col">Resumen del proyecto</th>
                                            <th scope="col">Impacto</th>
                                            <th scope="col">Lugar de impacto</th>
                                            <th scope="col">Resultados esperados</th>
                                            <th scope="col">Fecha de inicio</th>
                                            <th scope="col">Fecha de termino</th>
                                            <th scope="col">Linea de investigación</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Palabra clave</th>
                                            <th scope="col">Grupo de investigación</th>
                                            <th scope="col">Semillero de investigación</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require_once '../../conn.php';
                                        require_once '../../controller/loadTypes.php';
                                        loadProjects($mysqli);
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