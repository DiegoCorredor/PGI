<?php
require_once '../../controller/crudUser.php';
require '../../conn.php';

if(isset($_FILES['photoUser'])){

    $file = $_FILES['photoUser'];
    $fileName = $file['name'];
    $fileType = $file['type'];

    $allowed = array("image/jpeg", "image/png", "image/jpg");
    if(!in_array($fileType, $allowed)){
        header("Location: ./management.php");
        echo "<script>alert('El tipo de archivo no es válido');</script>";
        exit();
    }else{

        if(!is_dir("../../../img/profiles")){
            mkdir("../../../img/profiles", 0777);
        }

        move_uploaded_file($file['tmp_name'], '../../img/profiles/'.$fileName);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $dniType = $_POST["dniType"];
            $dniUser = $_POST["dniUser"];
            $codeUser = $_POST["codeUser"];
            $phoneUser = $_POST["phoneUser"];
            $mailUser = $_POST["mailUser"];
            $rolUser = $_POST["rolUser"];
            $passwordUser = $_POST["passwordUser"];
            $photoUser = $fileName;
            $statusUser = $_POST["statusUser"];
            $seedbedUser = $_POST["seedbedUser"];
    
            $pass = hash('sha256', $passwordUser);
    
            save($mysqli, $firstName, $lastName,$dniType, $dniUser, $codeUser, $phoneUser, $mailUser, $rolUser, $pass, $photoUser, $statusUser, $seedbedUser);
            header("Location: ./management.php");
            echo "<script>alert('Usuario guardado correctamente');</script>";
            
            exit();
        }
    }

    
}else{
    //header("Location: ./management.php");
    echo "<script>alert('No se ha seleccionado una imagen');</script>";
    exit();
}
