<?php

	session_start();

	$Username = $_POST['Username'];
	$Password = $_POST['Password'];

	$conn = new mysqli("localhost","root","","original");

	function OpenCon($conn){ 
		if (!$conn){
			die("Connection failed: " . mysqli_connect_error());
		}else{
			echo "Connected successfully<br>";
		}
	}


	function verify($conn, $Username, $Password){

		$sql = "SELECT * FROM register WHERE Username = '".$Username."'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		$validPassword = password_verify($Password, $row['Password']);
		echo $row['Password'];

		if($row['Username'] == $Username && $row['Password'] == $Password){
			$_SESSION["user_id"] = $row["id"];
			$_SESSION["user_id"] = $row["id"];
			header("location:index.php");
		}else {
			echo "<script>alert('Incorrect Username or Password!!')</script>";
		}

	}


	function CloseCon($conn){
	$conn -> close();
	}

	OpenCon($conn);
	verify($conn, $Username, $Password);
	CloseCon($conn);

?>
