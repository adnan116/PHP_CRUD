<?php 
	
	function databaseConnect()
	{
		$conn = mysqli_connect('localhost','root', '', 'test');
		return $conn;
	}

 ?>