<?php
	$conn = mysqli_connect("localhost", "root", "", "original");
	if ($conn -> connect_error) {
		die("No connection:". $conn-> connect_error);
	}
	$sql = "INSERT INTO request(Donationid,organization,location,contact,description) VALUES ('".$_POST['Donationid']."','".$_POST['organization']."','".$_POST['location']."','".$_POST['contact']."','".$_POST['description']."')";
	if ($conn->query($sql) === TRUE) {
    echo"<h1>Your request has been received and is being processed</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	$conn-> close();
	 ?>