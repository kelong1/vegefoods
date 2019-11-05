
<?php
	$conn = mysqli_connect("localhost", "root", "", "original");  
	if ($conn -> connect_error) {
		die("No connection:". $conn-> connect_error);
	}
	$sql = "INSERT INTO register (Username,Email,Password,CPassword) VALUES ('".$_POST['Username']."','".$_POST['Email']."','".$_POST['Password']."','".$_POST['CPassword']."')";
	if ($conn->query($sql) === TRUE) {
   header("location:login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	$conn-> close();
	 ?>
