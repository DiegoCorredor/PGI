<?php
require_once '../../controller/crudUser.php';
require '../../conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dniUser = $_POST["dniUserD"];

    delete($mysqli, $dniUser);
    header("Location: ./management.php");
    echo "<script>alert('Usuario eliminado correctamente');</script>";
    
    exit();
}
?>
