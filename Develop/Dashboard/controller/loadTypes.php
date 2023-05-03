<?php
    function loadTypeDni($mysqli){
        $query = "SELECT * FROM typesdni";
        $result = mysqli_query($mysqli, $query);
        $i = 0;
        echo "<option value=''>Seleccione una opción</option>";
        foreach ($result as $row) {
        $i++;
        echo "<option value='".$row['idtypesDni']."'>".$row['typeDni']."</option>";
        }
    }

    function loadRoles($mysqli){
        $query = "SELECT * FROM roles";
        $result = mysqli_query($mysqli, $query);
        $i = 0;
        echo "<option value=''>Seleccione una opción</option>";
        foreach ($result as $row) {
        $i++;
        echo "<option value='".$row['idroles']."'>".$row['rol']."</option>";
        }
    }

    function loadStatus($mysqli){
        $query = "SELECT * FROM statuses WHERE idstatuses=1 or idstatuses=2";
        $result = mysqli_query($mysqli, $query);
        $i = 0;
        echo "<option value=''>Seleccione una opción</option>";
        foreach ($result as $row) {
        $i++;
        echo "<option value='".$row['idstatuses']."'>".$row['status']."</option>";
        }
    }

    function loadSeedbeds($mysqli){
        $query = "SELECT * FROM seedbeds";
        $result = mysqli_query($mysqli, $query);
        $i = 0;
        echo "<option value=''>Seleccione una opción</option>";
        foreach ($result as $row) {
        $i++;
        echo "<option value='".$row['idseedbeds']."'>".$row['alias']."</option>";
        }
    }

    function loadDni($mysqli){
        $query = "SELECT * FROM users";
        $result = mysqli_query($mysqli, $query);
        $i = 0;
        echo "<option value=''>Seleccione una opción</option>";
        foreach ($result as $row) {
        $i++;
        echo "<option value='".$row['iduser']."'>".$row['dniUser']."</option>";
        }
    }

    function loadUsers($mysqli){
        $query = "SELECT * FROM users";
        $query2 = "SELECT * from statuses;";
        $query3 = "SELECT * from typesdni;";
        $query4 = "SELECT * from roles;";
        $query5 = "SELECT * from seedbeds;";
        $result = mysqli_query($mysqli, $query);
        $result2 = mysqli_query($mysqli, $query2);
        $result3 = mysqli_query($mysqli, $query3);
        $result4 = mysqli_query($mysqli, $query4);
        $result5 = mysqli_query($mysqli, $query5);
        $i = 0;
        foreach ($result as $row) {
        $i++;
        echo "<tr>
                <td>".$row['iduser']."</td>
                <td>".$row['firstName']."</td>
                <td>".$row['lastName']."</td>";
                foreach ($result3 as $row2) {
                        if ($row['typeDni'] == $row2['idtypesDni']) {
                            echo "<td>" . $row2['typeDni'] . "</td>";
                        }
                    }
                
        echo"   <td>".$row['dniUser']."</td>
                <td>".$row['codeUser']."</td>
                <td>".$row['phoneUser']."</td>
                <td>".$row['mailUser']."</td>";
                foreach ($result4 as $row3) {
                    if ($row['rolUser'] == $row3['idroles']) {
                        echo "<td>" . $row3['rol'] . "</td>";
                    }
                }
                foreach ($result2 as $row4) {
                    if ($row['statusUser'] == $row4['idstatuses']) {
                        echo "<td>" . $row4['status'] . "</td>";
                    }
                }
                foreach ($result5 as $row5) {
                    if ($row['seedbedUser'] == $row5['idseedbeds']) {
                        echo "<td>" . $row5['alias'] . "</td>";
                    }
                }
        "</tr>";
        }
    }

    function loadProjects($mysqli){
        $query = "SELECT * FROM projects";
        $query2 = "SELECT * from statuses;";
        $query3 = "SELECT * from seedbeds;";
        $query4 = "SELECT * from investigationlines;";
        $query5 = "SELECT * from investigationgroups;";
        $query6 = "SELECT * from keywords;";
        $result = mysqli_query($mysqli, $query);
        $result2 = mysqli_query($mysqli, $query2);
        $result3 = mysqli_query($mysqli, $query3);
        $result4 = mysqli_query($mysqli, $query4);
        $result5 = mysqli_query($mysqli, $query5);
        $result6 = mysqli_query($mysqli, $query6);
        $i = 0;
        foreach ($result as $row) {
        $i++;
        echo "<tr>
                <td>".$row['idprojects']."</td>
                <td>".$row['codeProject']."</td>
                <td>".$row['titleProject']."</td>
                <td>".$row['nameProject']."</td>
                <td>".$row['resumeProject']."</td>
                <td>".$row['impactProject']."</td>
                <td>".$row['impactLocationProject']."</td>
                <td>".$row['expectedResultsProject']."</td>
                <td>".$row['dateStartProject']."</td>
                <td>".$row['dateEndProject']."</td>";
                foreach($result4 as $row2){
                    if($row['investigationLineProject'] == $row2['idinvLine']){
                        echo "<td>".$row2['invLine']."</td>";
                    }
                }
                foreach ($result2 as $row2) {
                    if ($row['statusProject'] == $row2['idstatuses']) {
                        echo "<td>" . $row2['status'] . "</td>";
                    }
                }
                foreach ($result6 as $row2) {
                    if ($row['keywordsProject'] == $row2['idkeywords']) {
                        echo "<td>" . $row2['keyword'] . "</td>";
                    }
                }
                foreach($result5 as $row2){
                    if($row['investigationGroupProject'] == $row2['idinvestigationGroups']){
                        echo "<td>".$row2['investigationGroup']."</td>";
                    }
                }
                foreach ($result3 as $row3) {
                    if ($row['seedbedProject'] == $row3['idseedbeds']) {
                        echo "<td>" . $row3['alias'] . "</td>";
                    }
                }
        "</tr>";
        }
    }

    function loadInvestigationLines($mysqli){
        $query = "SELECT * FROM investigationlines";
        $result = mysqli_query($mysqli, $query);
        $i = 0;
        echo "<option value=''>Seleccione una opción</option>";
        foreach ($result as $row) {
        $i++;
        echo "<option value='".$row['idinvLine']."'>".$row['invLine']."</option>";
        }
    }

    function loadInvestigationGroups($mysqli){
        $query = "SELECT * FROM investigationgroups";
        $result = mysqli_query($mysqli, $query);
        $i = 0;
        echo "<option value=''>Seleccione una opción</option>";
        foreach ($result as $row) {
        $i++;
        echo "<option value='".$row['idinvestigationGroups']."'>".$row['investigationGroup']."</option>";
        }
    }

    function loadKeywords($mysqli){
        $query = "SELECT * FROM keywords";
        $result = mysqli_query($mysqli, $query);
        $i = 0;
        echo "<option value=''>Seleccione una opción</option>";
        foreach ($result as $row) {
        $i++;
        echo "<option value='".$row['idkeywords']."'>".$row['keyword']."</option>";
        }
    }

    function loadStatuses($mysqli){
        $query = "SELECT * FROM statuses WHERE idstatuses>2;";
        $result = mysqli_query($mysqli, $query);
        $i = 0;
        echo "<option value=''>Seleccione una opción</option>";
        foreach ($result as $row) {
        $i++;
        echo "<option value='".$row['idstatuses']."'>".$row['status']."</option>";
        }
    }

    function loadCodes($mysqli){
        $query = "SELECT * FROM projects";
        $result = mysqli_query($mysqli, $query);
        $i = 0;
        echo "<option value=''>Seleccione una opción</option>";
        foreach ($result as $row) {
        $i++;
        echo "alert('".$row['idprojects']."');";
        echo "<option value='".$row['idprojects']."'>".$row['codeProject']."</option>";
        }
    }

    function search($mysqli, $keyword){
        $query6 = "SELECT * from keywords;";
        $result6 = mysqli_query($mysqli, $query6);
        foreach ($result6 as $row6) {
            if ($row6['keyword'] == $keyword) {
                $keyword = $row6['idkeywords'];
            }
        }
        $query2 = "SELECT * from statuses;";
        $query3 = "SELECT * from seedbeds;";
        $query4 = "SELECT * from investigationlines;";
        $query5 = "SELECT * from investigationgroups;";
        
        
        $result2 = mysqli_query($mysqli, $query2);
        $result3 = mysqli_query($mysqli, $query3);
        $result4 = mysqli_query($mysqli, $query4);
        $result5 = mysqli_query($mysqli, $query5);
        $query = "SELECT * FROM projects WHERE keywordsProject LIKE '%$keyword%' OR titleProject LIKE '%$keyword%' OR nameProject LIKE '%$keyword%' OR resumeProject LIKE '%$keyword%' OR impactProject LIKE '%$keyword%' OR impactLocationProject LIKE '%$keyword%' OR expectedResultsProject LIKE '%$keyword%' OR dateStartProject LIKE '%$keyword%' OR dateEndProject LIKE '%$keyword%' OR codeProject LIKE '%$keyword%' OR statusProject LIKE '%$keyword%' OR seedbedProject LIKE '%$keyword%' OR investigationLineProject LIKE '%$keyword%' OR investigationGroupProject LIKE '%$keyword%'";
        $result = mysqli_query($mysqli, $query);
        $i = 0;
        foreach ($result as $row) {
        $i++;
        echo "<tr>
                <td>".$row['idprojects']."</td>
                <td>".$row['codeProject']."</td>
                <td>".$row['titleProject']."</td>
                <td>".$row['nameProject']."</td>
                <td>".$row['resumeProject']."</td>
                <td>".$row['impactProject']."</td>
                <td>".$row['impactLocationProject']."</td>
                <td>".$row['expectedResultsProject']."</td>
                <td>".$row['dateStartProject']."</td>
                <td>".$row['dateEndProject']."</td>";
                foreach($result4 as $row2){
                    if($row['investigationLineProject'] == $row2['idinvLine']){
                        echo "<td>".$row2['invLine']."</td>";
                    }
                }
                foreach ($result2 as $row2) {
                    if ($row['statusProject'] == $row2['idstatuses']) {
                        echo "<td>" . $row2['status'] . "</td>";
                    }
                }
                foreach ($result6 as $row2) {
                    if ($row['keywordsProject'] == $row2['idkeywords']) {
                        echo "<td>" . $row2['keyword'] . "</td>";
                    }
                }
                foreach($result5 as $row2){
                    if($row['investigationGroupProject'] == $row2['idinvestigationGroups']){
                        echo "<td>".$row2['investigationGroup']."</td>";
                    }
                }
                foreach ($result3 as $row3) {
                    if ($row['seedbedProject'] == $row3['idseedbeds']) {
                        echo "<td>" . $row3['alias'] . "</td>";
                    }
                }
        "</tr>";
        }
    }
?>