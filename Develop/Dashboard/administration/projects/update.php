<?php
require_once '../../controller/crudProject.php';
require '../../conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["codeProjectU"];
    $codeProject = $_POST["codeProject"];
    $titleProject = $_POST["titleProject"];
    $nameProject = $_POST["nameProject"];
    $resumeProject = $_POST["resumeProject"];
    $impactProject = $_POST["impactProject"];
    $impactLocationProject = $_POST["impactLocationProject"];
    $expectedResultsProject = $_POST["expectedResultsProject"];
    $dateStartProject = date('Y-m-d', strtotime($_POST["dateStartProject"]));
    $dateEndProject = date('Y-m-d', strtotime($_POST["dateEndProject"]));
    $investigationLineProject = $_POST["investigationLineProject"];
    $statusProject = $_POST["statusProject"];
    $keywordsProject = $_POST["keywordsProject"];
    $investigationgroupProject = $_POST["investigationGroupProject"];
    $seedbedProject = $_POST["seedbedProject"];

    update($mysqli, $id, $codeProject, $titleProject, $nameProject, $resumeProject, $impactProject, $impactLocationProject,$expectedResultsProject, $dateStartProject, $dateEndProject, $investigationLineProject, $statusProject, $keywordsProject, $investigationgroupProject, $seedbedProject);
    header("Location: ./management.php");
    echo "<script>alert('Proyecto actualizado correctamente');</script>";
    
    exit();
}
?>