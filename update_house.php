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
		
$sql = "UPDATE houses set category_id='" . $_POST['category_id'] . "', house_no='" . $_POST['house_no'] . "', description='" . $_POST['description'] . "', price='" . $_POST['price'] . "' WHERE id='" . $_POST['id'] . "'"; 

$result=mysqli_query($dbCon,$sql);

echo "Form Data has been updated Successfully in PHP";

if(mysqli_query($conn, $sql)){
		echo '<script>alert("Message send sucessfully")</script>';	
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

?>
<?php
header("Location:index2.php?page=houses");
exit();
?>
	</center>
</body>

</html>
