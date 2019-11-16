<?php 

	require_once('function.php');

	if (isset($_POST['submit'])) {
		
		$username = $_POST['uname'];
		$password = $_POST['pass'];
		$conPassword = $_POST['conpass'];

		if ($username == "" || $password == "" || $conPassword == "") {
			echo "Fill Data";
		}elseif ($password != $conPassword) {
			echo "Password not match!!!";
		}else{
			$status = userRegCheck($username,$password);

			if ($status == true) {
				header('location: ../index.php?msg=success');
			}else{
				header('location: ../views/adduser.php?msg=Error');
			}
		}
	}else{
		header('location: ../index.php');
	}

 ?>