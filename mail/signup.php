<?php

$name = $_POST['name'];
$email = $_POST['email'];
$duration = $_POST['duration'];

// Database Connection

$conn = new mysqli('localhost','root','test');
if($conn->connect_error){
   die('Connection Faild : ' .$conn->connect_error))
}
else
{
   $stmt = $conn-> prepare("INSERT INTO `registration`(`name`, `email`, `duration`) VALUES ('?','?','?'")
   $stmt->bind_param("sssi" $name, $email, $duration);
   $stmt->execute();
   echo "registration successfull..."
   $stmt->close();
   $conn->close();

}
?>
