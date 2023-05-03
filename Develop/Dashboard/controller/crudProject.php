<?php
function save($mysqli, $codeProject, $titleProject, $nameProject, $resumeProject, $impactProject, $impactLocationProject,$expectedResultsProject, $dateStartProject, $dateEndProject, $investigationLineProject, $statusProject, $keywordsProject, $investigationGroupProject, $seedbedProject) {
    $stmt = $mysqli->prepare("INSERT INTO projects (codeProject, titleProject, nameProject, resumeProject, impactProject, impactLocationProject, expectedResultsProject, dateStartProject, dateEndProject, investigationLineProject, statusProject, keywordsProject, investigationGroupProject, seedbedProject) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("issssssssiiiii", $codeProject, $titleProject, $nameProject, $resumeProject, $impactProject, $impactLocationProject,$expectedResultsProject, $dateStartProject, $dateEndProject, $investigationLineProject, $statusProject, $keywordsProject, $investigationGroupProject, $seedbedProject);
    $stmt->execute();
    $stmt->close();
}

function findAll($mysqli) {
    $query = "SELECT * FROM projects";
    $result = $mysqli->query($query);
    $projects = array();
    while ($row = $result->fetch_assoc()) {
        $projects[] = $row;
    }
    $result->close();
    return $projects;
}

function findOne($mysqli, $id) {
    $query = "SELECT * FROM projects WHERE codeProject = ?";
    $stmt = $mysqli->prepare($query);
    $id_ref = $id;
    $stmt->bind_param("i", $id_ref);
    $stmt->execute();
    $result = $stmt->get_result();
    $project = $result->fetch_assoc();
    $result->close();
    //echo json_encode($user);
    return $project;
}

function update($mysqli, $id, $codeProject, $titleProject, $nameProject, $resumeProject, $impactProject, $impactLocationProject, $expectedResultsProject, $dateStartProject, $dateEndProject, $investigationLineProject, $statusProject, $keywordsProject, $investigationgroupProject, $seedbedProject) {
    $stmt = $mysqli->prepare("UPDATE projects SET codeProject = ?, titleProject = ?, nameProject = ?, resumeProject = ?, impactProject = ?, impactLocationProject = ?, expectedResultsProject = ?, dateStartProject = ?, dateEndProject = ?, investigationLineProject = ?, statusProject = ?, keywordsProject = ?, investigationgroupProject = ?, seedbedProject = ? WHERE idprojects = ?");
    $stmt->bind_param("issssssssiiiiii", $codeProject, $titleProject, $nameProject, $resumeProject, $impactProject, $impactLocationProject, $expectedResultsProject, $dateStartProject, $dateEndProject, $investigationLineProject, $statusProject, $keywordsProject, $investigationgroupProject, $seedbedProject, $id);
    $stmt->execute();
    $stmt->close();
}

function delete($mysqli, $id) {
    $stmt = $mysqli->prepare("DELETE FROM projects WHERE idprojects = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

?>