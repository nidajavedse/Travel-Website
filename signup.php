<?php

	$name = $_POST['name'];
    $email = $_POST['email'];
    $duration = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into signup(name, email, password) values(?, ?, ?)");
		$stmt->bind_param( $name, $email, password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>