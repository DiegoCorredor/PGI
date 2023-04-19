<?php
//Register form
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$dniType = $_POST['dniType'];
$userDni = $_POST['userDni'];
$userPassword = $_POST['userPassword'];

include("./Login/conexionR.php");
include("./Login/conexion_verifi_correo.php");
$exist = mysqli_query($conexion_correo, "SELECT * FROM users WHERE dniUser = '$userDni'");
if(mysqli_num_rows($exist)>0)
    {
        echo '<div><center><FONT COLOR="red"> El correo ya se encuentra registrado, intente con otro. </FONT></center></div>';
        exit();
    }
mysqli_close($conexion_correo);

$pass = hash('sha256',$userPassword);

$sql=$conexion->query("insert into users(firstName,lastName,typeDni,dniUser,rolUser,passwordUser,statusUser) VALUES ('$firstName','$lastName','$dniType','$userDni','1','$pass','1')");
    if($sql=1){
        echo '<div><center><FONT COLOR="green"> Usuario registrado correctamente </FONT></center></div>';
    }else{
         echo '<div><center><FONT COLOR="red"> Usuario No registrado </FONT></center></div>';
    }    


?>