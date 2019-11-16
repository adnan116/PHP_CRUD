<?php 
	
	require_once('../php/function.php');
	session_start();
	if (isset($_SESSION['username'])) {
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

	<center><h1>User Details</h1></center>
	<table border="2px" width="50%" align="center">

		<tr>
			<td colspan="5" align="center"><h2>User List</h2></td>
		</tr>

		<tr>
			<th>User ID</th>
			<th>User Name</th>
			<th>Password</th>
			<th colspan="2">Operation</th>
		</tr>

		<?php 
			$result = userView();
			while ($rows = mysqli_fetch_assoc($result)) {
			
		?>
		<tr align="center">
			<td><?php echo $rows['id']; ?></td>
			<td><?php echo $rows['username']; ?></td>
			<td><?php echo $rows['password']; ?></td>
			<td><a href="updateuser.php?id=<?php echo $rows['id'];?>">Edit</a></td>
			<td><a href="../php/deleteuser.php?id=<?php echo $rows['id'];?>">Delete</a></td>
		</tr>
		<?php 
			}
		 ?>
		
	</table>
	
</body>
</html>


<?php 

	}else{
		header('location: ../index.php');
	}

 ?>