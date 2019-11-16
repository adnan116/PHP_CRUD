<?php 

	if (isset($_GET['msg'])) {
		echo $_GET['msg'];
	}

 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<div align="center" width="50%">
		<fieldset>
			<legend>Login</legend>
			<form method="POST" action="php/loginCheck.php">
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
						<td colspan="2" align="center">
							<br><br>
							<input type="submit" name="submit" value="Login">
							<input type="reset" name="reset" value="Reset">
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
	</div>

</body>
</html>