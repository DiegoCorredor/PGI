<?php
require_once '../../controller/crudUser.php';
require '../../conn.php';

if (isset($_FILES['photoUser1'])) {

    $file = $_FILES['photoUser1'];
    $fileName = $file['name'];
    $fileType = $file['type'];

    $allowed = array("image/jpeg", "image/png", "image/jpg");
    if (!in_array($fileType, $allowed)) {
        header("Location: ./management.php");
        echo "<script>alert('El tipo de archivo no es válido');</script>";
        exit();
    } else {

        if (!is_dir("../../../img/profiles")) {
            mkdir("../../../img/profiles", 0777);
        }

        move_uploaded_file($file['tmp_name'], '../../img/profiles/' . $fileName);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST["dniUserS"];
            $dniUser = $_POST["dniUser1"];
            $firstName = $_POST["firstName1"];
            $lastName = $_POST["lastName1"];
            $dniType = $_POST["dniType1"];
            $codeUser = $_POST["codeUser1"];
            $phoneUser = $_POST["phoneUser1"];
            $mailUser = $_POST["mailUser1"];
            $rolUser = $_POST["rolUser1"];
            $passwordUser = $_POST["passwordUser1"];
            $photoUser = $fileName;
            $statusUser = $_POST["statusUser1"];
            $seedbedUser = $_POST["seedbedUser1"];

            $pass = hash('sha256', $passwordUser);

            update($mysqli, $id, $firstName, $lastName, $dniType, $dniUser, $codeUser, $phoneUser, $mailUser, $rolUser, $pass, $photoUser, $statusUser, $seedbedUser);
            header("Location: ./management.php");
            echo "<script>alert('Usuario actualizado correctamente');</script>";

            exit();
        }
    }
} else {
    header("Location: ./management.php");
    echo "<script>alert('No se ha seleccionado una imagen');</script>";
    exit();
}
