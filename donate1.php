<?php
	$conn = mysqli_connect("localhost", "root", "", "original");
	if ($conn -> connect_error) {
		die("No connection:". $conn-> connect_error);
	}
	$sql = "INSERT INTO donate(category,pic,quantity,Description) VALUES ('".$_POST['category']."','".$_POST['pic']."','".$_POST['quantity']."','".$_POST['Description']."')";
	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Thank you for donation')</script>";
    	header("location:view.php");
    
} else {
    echo "<script>alert('something went wrong try again')</script>Error: " . $sql . "<br>" . $conn->error;
}
	$conn-> close();
	 ?>
	