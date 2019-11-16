<?php 
	
	require_once('database.php');

	function userCheck($username,$password)
	{
		$conn = databaseConnect();
		$sql = "select * from userlist where username = '{$username}' and password = '{$password}'";
		$result = mysqli_query($conn,$sql);
		$rows = mysqli_fetch_assoc($result);

		return count($rows);
	}

	function userRegCheck($username,$password)
	{
		$conn = databaseConnect();
		$sql = "insert into userlist values('','{$username}','{$password}',0)";

		if (mysqli_query($conn,$sql)) {
			return true;
		}else{
			return false;
		}
	}

	function userView()
	{
		$conn = databaseConnect();
		$sql = "select * from userlist";
		$result = mysqli_query($conn,$sql);

		return $result;
	}

	function single_user($id)
	{
		$conn = databaseConnect();
		$sql = "select * from userlist where id='{$id}'";
		$result = mysqli_query($conn,$sql);

		return $result;
	}

	function userUpdate($uname,$newpass)
	{
		$conn = databaseConnect();
		$sql = "update userlist SET password ='{$newpass}' where username = '{$uname}'";
		mysqli_query($conn,$sql);
	}

	function userDelete($uname)
	{
		$conn = databaseConnect();
		$sql = "delete from userlist where username = '{$uname}'";
		mysqli_query($conn,$sql);
	}
 ?>