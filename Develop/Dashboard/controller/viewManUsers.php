<?php
function viewMenu($tipo_usuario){
    if($tipo_usuario == 2 || $tipo_usuario == 3 || $tipo_usuario == 4){
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
                        <a class='collapse-item' href='./administration/users/management.php'>Usuarios</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class='sidebar-divider'>

            <!-- Heading -->
            <div class='sidebar-heading'>
                Gestión de Proyectos
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class='nav-item'>
                <a class='nav-link' href='#' data-toggle='collapse' data-target='#collapsePages1' aria-expanded='false'
                    aria-controls='collapsePages'>
                    <i class='fas fa-fw fa-book'></i>
                    <span>Proyectos</span>
                </a>
                <div id='collapsePages1' class='collapse' aria-labelledby='headingPages' data-parent='#accordionSidebar'>
                    <div class='bg-white py-2 collapse-inner rounded'>
                        <a class='collapse-item' href='./administration/projects/management.php'>Proyectos</a>
                    </div>
                </div>
            </li>";
    }
}
?>