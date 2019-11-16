<?php 
	
	session_start();
	require_once('function.php');
	if (isset($_POST['submit'])) {
		
		$username = $_POST['uname'];
		$password = $_POST['pass'];

		if ($username == "" || $password == "") {
			echo "Fill Data";
		}else{
			$counts = userCheck($username,$password);

			if ($counts > 0) {
				$_SESSION['username'] = $username;
				//setcookie('username',$username,time()+300,'/');
				header('location: ../views/home.php');
			}else{
				echo "Invalid Username or Password";
			}
		}
	}else{
		header('location: ../index.php');
	}
	
 ?>