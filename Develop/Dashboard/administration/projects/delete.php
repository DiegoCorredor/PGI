<?php
require_once '../../controller/crudProject.php';
require '../../conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codeProject = $_POST["codeProjectD"];

    delete($mysqli, $codeProject);
    header("Location: ./management.php");
    echo "<script>alert('Proyecto eliminado correctamente');</script>";
    
    exit();
}
?>
