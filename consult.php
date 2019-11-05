<?php
	$conn = mysqli_connect("localhost", "root", "", "original");
	if ($conn -> connect_error) {
		die("No connection:". $conn-> connect_error);
	}
	$sql = "INSERT INTO consult(Name,Email,Subject,Message) VALUES ('".$_POST['Name']."','".$_POST['Email']."','".$_POST['Subject']."','".$_POST['Message']."')";
	if ($conn->query($sql) === TRUE) {
    echo"<h1>Your request has been received and is being processed</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	$conn-> close();
	 ?>