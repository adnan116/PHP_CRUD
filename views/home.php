<?php 
	session_start();
	if (isset($_SESSION['username'])) {
		
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home</title>
 </head>
 <body>

 	<h1>Welcome, Home!!!!</h1>
 	<a href="userlist.php">User List</a>
 	<a href="adduser.php">Add User</a>
 	<a href="../php/logout.php">Log Out</a>
 	
 </body>
 </html>

 <?php 

 	}else{
 		header('location: ../index.php');
 	}

  ?>