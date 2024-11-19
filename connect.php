<?php
		$server="localhost";
		$user="sketch";
		$password="tran123";
		$data="sketch";
		$conn = mysqli_connect($server, $user, $password, $data);
		if($conn->connect_errno){
			echo 'Không kết nối được.'.$conn->mysqli_error;
			exit();
		}
	else{
		mysqli_select_db($conn,$data);
		mysqli_query($conn,"SET NAMES 'UTF8'");
	}
?>