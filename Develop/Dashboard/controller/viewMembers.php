<?php
    //require '../../../conn.php';

    function viewUser($mysqli,$seedbed){
        $query = "SELECT * FROM users WHERE seedbedUser = '$seedbed'";
        $query2 = "SELECT * from statuses;";
        $result = mysqli_query($mysqli, $query);
        $result2 = mysqli_query($mysqli, $query2);
        foreach ($result as $row) {
            echo "<tr>
                    <td>" . $row['firstName'] . "</td>
                    <td>" . $row['lastName'] . "</td>
                    <td>" . $row['dniUser'] . "</td>
                    <td>" . $row['codeUser'] . "</td>
                    <td>" . $row['phoneUser'] . "</td>
                    <td>" . $row['mailUser'] . "</td>";

                    if ($row['statusUser'] == 1 || $row['statusUser'] == 2 ) {
                        foreach ($result2 as $row2) {
                            if ($row['statusUser'] == $row2['idstatuses']) {
                                echo "<td>" . $row2['status'] . "</td>";
                            }
                        }
                    }
                    
        }
        mysqli_close($mysqli);
    }

?>