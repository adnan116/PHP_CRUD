<?php 
	require_once ('../php/function.php');
	session_start();
	if (isset($_SESSION['username'])) {
		if (is_numeric($_GET['id'])) {
			$data =single_user($_GET['id']);
			$rows = mysqli_fetch_assoc($data);
			$_SESSION['uname'] = $rows['username'];
			$_SESSION['pass'] = $rows['password'];
		}
	
 ?>


<!DOCTYPE html>
 <html>
 <head>
 	<title>Update</title>
 </head>
 <body>

 	<h1>Update User</h1>
 	<fieldset>
 		<legend>Update User</legend>
 		<form method="POST" action="../php/updateCheck.php">
 			<table>
 				<tr>
 					<td>User Name:</td>
 					<td><input type="text" name="uname" disabled value="<?php echo $_SESSION['uname']?>"></td>
 				</tr>
 				<tr>
 					<td>Current Password:</td>
 					<td><input type="Password" name="curpass"></td>
 				</tr>
 				<tr>
 					<td>New Password:</td>
 					<td><input type="Password" name="newpass"></td>
 				</tr>
 				<tr>
 					<td>Confirm Password:</td>
 					<td><input type="Password" name="conpass"></td>
 				</tr>
 				<tr>
					<td colspan="2" align="center">
						<br><br>
						<input type="submit" name="submit" value="Update">
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