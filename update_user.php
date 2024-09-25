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
    //    $password = mysqli_real_escape_string($connect, $_POST["password"]);  
     //   $data = md5($password);  
$sql = "UPDATE users set name='" . $_POST['name'] . "', username='" . $_POST['username'] . "', password='" . $_POST['password'] . "', type='" . $_POST['type'] . "' WHERE id='" . $_POST['id'] . "'"; 

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
header("Location:index2.php?page=users");
exit();
?>
	</center>
</body>

</html>
