<?php
//require '../../../conn.php';

function viewProject($mysqli, $seedbedProject)
{
    $query3 = "SELECT * from projects WHERE seedbedProject=$seedbedProject;";
    $query4 = "SELECT * from statuses;";
    $query5 = "SELECT * from investigationlines;";
    $query6 = "SELECT * from keywords;";
    $result = mysqli_query($mysqli, $query3);
    $result2 = mysqli_query($mysqli, $query4);
    $result3 = mysqli_query($mysqli, $query5);
    $result4 = mysqli_query($mysqli, $query6);
    foreach ($result as $row) {
        echo "<tr>
            <td>" . $row['codeProject'] . "</td>
            <td>" . $row['titleProject'] . "</td>
            <td>" . $row['dateStartProject'] . "</td>";
        foreach ($result3 as $row3) {
            if ($row['investigationLineProject'] == $row3['idinvLine']) {
                echo "<td>" . $row3['invLine'] . "</td>";
            }
        }
        foreach ($result4 as $row4) {
            if ($row['keywordsProject'] == $row4['idkeywords']) {
                echo "<td>" . $row4['keyword'] . "</td>";
            }
        }   
        if ($row['statusProject'] != 1 || $row['statusProject'] != 2) {
            foreach ($result2 as $row2) {
                if ($row['statusProject'] == $row2['idstatuses']) {
                    echo "<td>" . $row2['status'] . "</td>";
                }
            }
        }
        
    }
    mysqli_close($mysqli);
}
