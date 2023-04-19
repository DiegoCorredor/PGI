<?php
	require "conn.php";
	session_start();
	if($_POST){
		$usuario = $_POST['member-login-number'];
		$password = $_POST['member-login-password'];
		$sql = "SELECT dniUser, passwordUser, firstName FROM users WHERE dniUser='$usuario'";
		$resultado = $mysqli->query($sql);
		$num = $resultado->num_rows;
		if($num>0){
			$row = $resultado->fetch_assoc();
			$password_bd = $row['passwordUser'];
			
			$pass_c = hash('sha256',$password);
			
			if($password_bd == $pass_c){
				
				$_SESSION['dniUser'] = $row['dniUser'];
				$_SESSION['name'] = $row['firstName'];
				$_SESSION['rolUser'] = $row['rolUser'];
				
				header("Location: dashboard.php");
			} else {
				echo "<script>alert('Contraseña incorrecta, vuelve a intentarlo de nuevo.')</script>";
				echo "<script>window.location.href = '../index.html';</script>";
			}	
		} else {
			echo "NO existe usuario";
		}	
	}
?>