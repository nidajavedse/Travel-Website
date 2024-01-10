 <?php
    session_start();
    $email = $_POST['email'];
	$password = $_POST['password'];
	$_SESSION["Message"] = "Login Successfully";
	// Database connection
	$con = new mysqli("localhost","root","","test");
    if($con->connect_error){
		die("Connection Failed : " .$con->connect_error);
	} else{
		$stmt = $con->prepare("select * from registration where email = ?");
		$stmt->bind_param("s", $email);
		$stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password){
                echo '<script href="index.html">';
                echo ' alert("Login Successfully")';
                echo '</script>';
                echo file_get_contents("index.html");
            } else {
                echo '<script href="index.html">';
                echo ' alert("Invalid Email and password")';
                echo '</script>';
                echo file_get_contents("index.html");
            }
         } else {
                echo '<script href="index.html">';
                echo ' alert("Invalid Email and password")';
                echo '</script>';
                echo file_get_contents("index.html");
         }
    }
?>