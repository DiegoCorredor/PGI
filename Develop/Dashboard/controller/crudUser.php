<?php
    function save($mysqli, $firstName, $lastName, $typeDni, $dniUser, $codeUser, $phoneUser, $mailUser, $rolUser, $passwordUser, $photoUser, $statusUser, $seedbedUser) {
        $stmt = $mysqli->prepare("INSERT INTO users (firstName, lastName, typeDni, dniUser, codeUser, phoneUser, mailUser, rolUser, passwordUser, photoUser, statusUser, seedbedUser) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssss", $firstName, $lastName, $typeDni, $dniUser, $codeUser, $phoneUser, $mailUser, $rolUser, $passwordUser, $photoUser, $statusUser, $seedbedUser);
        $stmt->execute();
        $stmt->close();
    }
    
    function findAll($mysqli) {
        $query = "SELECT * FROM users";
        $result = $mysqli->query($query);
        $users = array();
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        $result->close();
        return $users;
    }

    function findOne($mysqli, $id) {
        $query = "SELECT * FROM users WHERE dniUser = ?";
        $stmt = $mysqli->prepare($query);
        $id_ref = $id;
        $stmt->bind_param("i", $id_ref);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $result->close();
        //echo json_encode($user);
        return $user;
    }
    
    
    function update($mysqli, $id, $firstName, $lastName, $typeDni, $dniUser, $codeUser, $phoneUser, $mailUser, $rolUser, $passwordUser, $photoUser, $statusUser, $seedbedUser) {
        $stmt = $mysqli->prepare("UPDATE users SET firstName = ?, lastName = ?, typeDni = ?, dniUser = ?, codeUser = ?, phoneUser = ?, mailUser = ?, rolUser = ?, passwordUser = ?, photoUser = ?, statusUser = ?, seedbedUser = ? WHERE iduser = ?");
        $stmt->bind_param("ssssssssssssi", $firstName, $lastName, $typeDni, $dniUser, $codeUser, $phoneUser, $mailUser, $rolUser, $passwordUser, $photoUser, $statusUser, $seedbedUser, $id);
        $stmt->execute();
        $stmt->close();
    }
    
    function delete($mysqli, $id) {
        $stmt = $mysqli->prepare("DELETE FROM users WHERE iduser = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
