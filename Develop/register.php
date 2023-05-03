<?php
//Register form
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$dniType = $_POST['dniType'];
$userDni = $_POST['userDni'];
$userPassword = $_POST['userPassword'];
include("./Dashboard/conn.php");
$exist = mysqli_query($mysqli, "SELECT * FROM users WHERE dniUser = '$userDni'");
if(mysqli_num_rows($exist) > 0)
{
    echo '<div><center><FONT COLOR="red"> El correo ya se encuentra registrado, intente con otro. </FONT></center></div>';
    exit();
}
$pass = hash('sha256', $userPassword);
$sql = "INSERT INTO users(firstName, lastName, typeDni, dniUser, rolUser, passwordUser, statusUser) VALUES ('$firstName', '$lastName', '$dniType', '$userDni', '1', '$pass', '1')";
if($mysqli->query($sql))
{
    echo '<div><center><FONT COLOR="green"> Usuario registrado correctamente </FONT></center></div>';
}
else
{
    echo '<div><center><FONT COLOR="red"> Usuario No registrado </FONT></center></div>';
}
mysqli_close($mysqli);
?>