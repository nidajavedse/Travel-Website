<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
        session_start();
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $_SESSION["Message"] = "Your ticket data is saved in database successfully.";
        $conn = mysqli_connect("localhost", "root", "", "record");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $destination =  $_REQUEST['destination'];
        $departdate = $_REQUEST['departdate'];
        $returndate =  $_REQUEST['returndate'];
        $duration = $_REQUEST['duration'];
       
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO data VALUES ('$destination',
            '$departdate','$returndate','$duration')";
         
        if(mysqli_query($conn, $sql)){
            echo $_SESSION["Message"];
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>