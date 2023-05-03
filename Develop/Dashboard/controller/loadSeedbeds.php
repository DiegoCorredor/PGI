<?php
    function loadSeedbods($mysqli){
        $query = "SELECT * FROM seedbeds";
        $result = mysqli_query($mysqli, $query);
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
                        <a class='collapse-item' href='./seedbeds/".$row['alias']."/info/info.php'><i class='fas fa-fw fa-info'></i>  -  Información</a>
                        <a class='collapse-item' href='./seedbeds/".$row['alias']."/members/users.php'><i class='fas fa-fw fa-user'></i>  -  Integrantes</a>
                        <a class='collapse-item' href='./seedbeds/".$row['alias']."/projects/projects.php'><i class='fas fa-fw fa-folder'></i>  -  Proyectos</a>
                    </div>
                </div>
            </div>";
        }
    }
