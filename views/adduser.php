<?php 
	session_start();

	if (isset($_GET['msg'])) {
		echo $_GET['msg'];
	}

	if (isset($_SESSION['username'])) {
	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Reg</title>
 </head>
 <body>

 	<h1>Registration</h1>
 	<fieldset>
 		<legend>Reg</legend>
 		<form method="POST" action="../php/regCheck.php">
 			<table>
 				<tr>
 					<td>User Name:</td>
 					<td><input type="text" name="uname"></td>
 				</tr>
 				<tr>
 					<td>Password:</td>
 					<td><input type="Password" name="pass"></td>
 				</tr>
 				<tr>
 					<td>Confirm Password:</td>
 					<td><input type="Password" name="conpass"></td>
 				</tr>
 				<tr>
					<td colspan="2" align="center">
						<br><br>
						<input type="submit" name="submit" value="Sign In">
						<input type="reset" name="reset" value="Reset">
					</td>
				</tr>
 			</table>
 		</form>
 	</fieldset>
 
 </body>
 </html>

 <?php

 	}else{
 		header('location: ../index.php');
 	}

 ?>