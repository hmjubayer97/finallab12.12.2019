 <?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "info";
	
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$id = $_POST['id'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$usertype = $_POST['usertype'];
	
	$sql = "INSERT INTO input (id,password,changepass,name,email,usertype)
	VALUES ('$id','$password','$changepass','$name','$email','$usertype')";
	
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>