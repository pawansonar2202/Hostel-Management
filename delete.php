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
		
$sql = "DELETE FROM enquiry ";

		
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
header("Location:index2.php?page=enquiry");
exit();
?>
	</center>
</body>

</html>
