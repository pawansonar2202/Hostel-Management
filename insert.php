<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "","house_rental_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$contact = $_REQUEST['contact'];
		$message = $_REQUEST['message'];
		$dt1=date("y-m-d");

		$sql = "INSERT INTO enquiry VALUES ('$name',
			'$email','$contact','$message','$dt1')";
		
		if(mysqli_query($conn, $sql)){
		echo '<script>alert("Message send sucessfully")</script>';	
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		<?php
header("Location:./index.html");
exit();
?>
	</center>
</body>

</html>
