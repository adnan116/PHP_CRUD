<?php 
	
	require_once('function.php');
	session_start();
	if (isset($_POST['submit'])) {
		$crpass = $_POST['curpass'];
		$npass = $_POST['newpass'];
		$conpass = $_POST['conpass'];

		if ($crpass == "" || $npass == "" || $conpass == "") {
			echo "Fill Data";
		}elseif ($crpass != $_SESSION['pass']) {
			echo "Wrong Password!!!";
		}elseif ($npass != $conpass) {
			echo "Password not match!!!";
		}else{
			userUpdate($_SESSION['uname'],$npass);
			header('location: ../views/userlist.php');
		}
	}else{
		header('location: ../index.php');
	}

 ?>